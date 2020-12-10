<?php

namespace App\Http\Controllers\Frontend;

use App\Events\EmailNotificationEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Models\CcpaLead;
use Models\Lead;

class CcpaLeadController extends Controller
{
    public function store()
    {
        $validData = request()->validate($this->getRules());
        try {
            DB::beginTransaction();
            CcpaLead::create($this->buildStoreData($validData));
            $model = [
                'to_email' => config('mail.send_email_to'),
                'validData' => $validData
            ];
            event(new EmailNotificationEvent($model));
            Lead::validateCcpaWithLead($validData);
            DB::commit();
            return redirect()->route('CCPA_CONFIRMATION_PAGE_SHOW');
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('CCPA_CONFIRMATION_PAGE_SHOW');
        }
    }

    private function buildStoreData($validData)
    {
        return collect($validData)
            ->merge([
           'requestoptions' => $this->transformArrayToString($validData['requestoptions'] ?? null)
        ])
            ->toArray();
    }

    private function transformArrayToString($data)
    {
        $data = collect($data);
        $valueCount = $data->count();
        if($valueCount === 1){
            return (string) $data[0];
        }
        return $data->implode(',');
    }

    /**
     * Get the rules of ccpa leads request
     * @return array
     */
    private function getRules() : array
    {
        return [
            'email_address' => ['required', 'email'],
            'requestor' => ['nullable'],
            'requestoptions' => ['nullable'],
            'first_name' => ['nullable'],
            'last_name' => ['nullable'],
            'street' => ['nullable'],
            'apt' => ['nullable'],
            'city' => ['nullable'],
            'state' => ['nullable'],
            'zip_code' => ['nullable'],
            'primary_phone' => ['nullable'],
        ];
    }
}
