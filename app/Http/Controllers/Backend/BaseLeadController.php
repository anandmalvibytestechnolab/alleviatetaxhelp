<?php

namespace App\Http\Controllers\Backend;

use Models\CcpaLead;
use Models\Lead;

abstract class BaseLeadController extends BackendBaseController
{
    protected $leadModels = [
        'leads' => Lead::class,
        'ccpa' => CcpaLead::class
    ];

    protected function fetchLeads($start_date, $end_date, $email = null)
    {
        $leadModel = $this->getLeadModel();
        $leads = $leadModel::whereBetween('created_at', [$start_date, $end_date])->orderBy('id', 'desc');
        !empty($email) ? $leads = $leads->where('email', $email) : null;
        !empty($url) ? $leads = $leads->where('url', 'like', '%' . $url . '%') : null;

        return $leads->paginate(config('app.paginated_results_per_page'));
    }

    protected function getLeadModel()
    {
        $modelSlug = get_last_url_segment();
        abort_if(!array_key_exists($modelSlug, $this->leadModels), 404);
        return $this->leadModels[$modelSlug];
    }
}