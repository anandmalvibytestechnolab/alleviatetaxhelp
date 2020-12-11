<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Validation\Rule;

class LeadsController extends BaseLeadController
{
    public $rowsCount;
    private $leadsStartDate;
    private $leadsEndDate;
    private $rules;
    private $leadModel;

    public function __construct()
    {
        parent::__construct();
        $this->setRules();
    }

    public function index()
    {
        $method = strtolower(request()->method());

        if ($method === 'get') {
            return $this->queryLeadsOnGetRequest();
        }
        if ($method === 'post') {
            return $this->queryLeadsOnPostRequest();
        }
    }

    private function setRules()
    {
        $this->rules = [
            'start_date' => ['required', 'date_format:"Y-m-d"'],
            'end_date' => ['required', 'date_format:"Y-m-d"'],
            //'email' => ['email', 'nullable'],
            'url' => ['nullable'],
        ];
    }

    public function queryLeadsOnGetRequest()
    {
        $this->leadModel = $this->getLeadModel();
        return view('backend.lead_index')->with([
            'rows' => $this->fetchLeads(session('start_date'), session('end_date'), '', session('url')),
            'is_excel_export' => false,
            'rows_count' => $this->rowsCount,
            'readable_lead_model' => $this->getReadableLeadModel(get_last_url_segment()),
            'lead_loop_view' => $this->leadModel::getLoopView()
        ]);
    }

    public function queryLeadsOnPostRequest()
    {
        $validParams = request()->validate($this->rules);
        $this->setQueryParamsForNextPaginatedResults($validParams);

        return redirect()->back();
        //return redirect()->route('BE_LEADS_INDEX');
    }

    private function setQueryParamsForNextPaginatedResults($validData)
    {
        $validData['start_date'] ? $this->leadsStartDate = $validData['start_date'] . ' 00:00:00' : null;
        $validData['start_date'] ? session(['start_date' => $validData['start_date'] . ' 00:00:00']) : null;
        $validData['end_date'] ? $this->leadsEndDate = $validData['end_date'] . ' 23:59:59' : null;
        $validData['end_date'] ? session(['end_date' => $validData['end_date'] . ' 23:59:59']) : null;

        //$validData['email'] ? $this->queriedEmail = $validData['email'] : null;
        //$validData['email'] ? session(['email' => $validData['email']]) : session()->forget('email');

//        $validData['url'] ? $this->queriedCampaign = $validData['url'] : null;
//        $validData['url'] ? session(['url' => $validData['url']]) : session()->forget('url');
    }

    private function getReadableLeadModel()
    {
        return $this->leadModel::$readableLeadModel;
    }

}
