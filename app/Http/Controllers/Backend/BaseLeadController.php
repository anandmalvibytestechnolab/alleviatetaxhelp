<?php

namespace App\Http\Controllers\Backend;

use Models\Lead;

abstract class BaseLeadController extends BackendBaseController
{

    protected function fetchLeads($start_date, $end_date, $email = null, $url = null)
    {
        $leads = Lead::whereBetween('created_at', [$start_date, $end_date])->orderBy('id', 'desc');
        !empty($email) ? $leads = $leads->where('email', $email) : null;
        !empty($url) ? $leads = $leads->where('url', 'like', '%' . $url . '%') : null;

        return $leads->paginate(config('app.paginated_results_per_page'));
    }
}