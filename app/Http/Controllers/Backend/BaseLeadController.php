<?php

namespace App\Http\Controllers\Backend;

use Models\CcpaLead;
use Models\Lead;
use Carbon\Carbon;

abstract class BaseLeadController extends BackendBaseController
{
    protected $leadModels = [
        'leads' => Lead::class,
        'ccpa' => CcpaLead::class
    ];

    protected function fetchLeads($start_date, $end_date, $email = null, $isExport = '', $page = '')
    {
        $today = Carbon::today()->toDateString();
        $start_date = ($start_date) ? $start_date : $today . ' 00:00:00';
        $end_date = ($end_date) ? $end_date : $today . ' 23:59:59';
        $leadModel = $this->getLeadModel($isExport, $page);
        $leads = $leadModel::whereBetween('created_at', [$start_date, $end_date])->orderBy('id', 'desc');
        !empty($email) ? $leads = $leads->where('email_address', $email) : null;
        //!empty($url) ? $leads = $leads->where('url', 'like', '%' . $url . '%') : null;
        if ($isExport == 'YES') {
            return $leads->get();
        }
        return $leads->paginate(config('app.paginated_results_per_page'));
    }

    protected function getLeadModel($isExport = '', $page = '')
    {
        $modelSlug = ($isExport == 'YES') ? $page : get_last_url_segment();
        abort_if(!array_key_exists($modelSlug, $this->leadModels), 404);
        return $this->leadModels[$modelSlug];
    }
}