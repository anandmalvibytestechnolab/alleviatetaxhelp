<?php

namespace App\Src;

use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LeadToCake
{
    /**
     * Posting data to CAKE and save response
     *
     * @param   mixed $requestData
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return  mixed
     */
    public function postToCake($requestData)
    {
        $response = Http::get('https://alvtx-trk.com/d.ashx', $requestData);
        if ($response->status() == 200) {
            $body = $response->body();
            return $this->cakeResponseObserver($body, $response);
        }
        return $this->defaultReturn($response);
    }

    /**
     * Prepare the all request query fields for cake and Lead
     *
     * @param   Request $request
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return  array
     */
    public function prepareFields(Request $request) : array
    {
        $requestData = [];
        foreach ($this->getFields() AS $data) {
            $requestData[$data] = (string) $request->input($data);
        }
        $ckmOfferId = $requestData['ckm_offer_id'];
        $ckmRequestId = $requestData['ckm_request_id'];
        $requestData['ckm_offer_id'] = ($ckmOfferId) ? $ckmOfferId : '2';
        $requestData['offer_id'] = $requestData['ckm_offer_id'];
        $requestData['ckm_request_id'] = ($ckmRequestId) ? $ckmRequestId : $requestData['reqid'];
        $requestData['aff_id'] = $requestData['affid'];
        $requestData['phone_home'] = $requestData['primary_phone'];
        $requestData['req_id'] = $requestData['reqid'];
        return $requestData;
    }

    /**
     * Get all fields required for Cake and Leads
     *
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return  array
     */
    private function getFields() : array
    {
        return [
            'affid', 'aff_id', 'ckm_offer_id', 'ckm_request_id',
            'primary_phone', 'reqid', 'req_id', 's1', 's2', 's3', 'subid',
            'utm_campaign', 'utm_source', 'utm_medium',
            
        ];
    }

    /**
     * Check response and based on response data will inner call
     * Specific function related to response
     *
     * @param   string $body
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return  array
     */
    private function cakeResponseObserver($body, $response)
    {
        if (Str::contains(Str::lower($body), 'html')) {
            return $this->htmlObserver($body, $response);
        } elseif (Str::contains(Str::lower($body), 'xml')) {
            return $this->xmlObserver($body);
        }
    }

    /**
     * 
     * @param   mixed $body
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return  array
     */
    private function htmlObserver($body, $response) : array
    {
        return $this->defaultReturn($response);
        $doc = new \DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($body); // loads your html
        $xpath = new \DOMXPath($doc);
        $nodelist = $xpath->query("//a"); // find a tag
        $node = $nodelist->item(0); // gets the href url
        $href = $node->attributes->getNamedItem('href')->nodeValue;
        $values = explode('&', Str::after($href, '?'));
        $result = ['redirect' => $href, 'cake_response' => $body, 'cake_status' => ''];
        foreach ($values AS $value) {
            $explodedeData = explode('=', $value);
            $result[$explodedeData[0]] = $explodedeData[1];
        }
        return $result;
    }

    /**
     * XML data observer, It will check XML data and fetch required data from it
     * Return the prepared array with specific keys
     *
     * @param   string $body
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return  array
     */
    private function xmlObserver($body)
    {
        $href = route('FE_CONFIRMATION_PAGE_SHOW');
        $xml = simplexml_load_string($body, "SimpleXMLElement", LIBXML_NOCDATA);
        $jsonXml = json_encode($xml);
        $result = json_decode($jsonXml, TRUE);
        
        $response = ['redirect' => $href, 'cake_response' => $jsonXml, 'leadid' => '', 'cake_status' => $result['msg']];
        
        if (!$result['code']) { // 0 Mean success and 1 mean error which is get in code
            $response['leadid'] = $result['leadid'];
            $response['redirect'] = $result['redirect'];
        }
        return $response;
    }

    private function defaultReturn($response)
    {
        return [
            'redirect' => route('FE_CONFIRMATION_PAGE_SHOW'),
            'cake_response' => $response->body(),
            'leadid' => '',
            'cake_status' => $response->status()
        ];
    }
}
