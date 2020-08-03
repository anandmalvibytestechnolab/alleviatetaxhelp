<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadsExportController extends BaseLeadController
{
    public function index()
    {
        $date = strftime('%d.%m.%Y-%H.%M.%S', time());
        if (session('start_date') && session('end_date')) {
            $start_date = session('start_date') . ' 00:00:00';
            $end_date = session('end_date') . ' 23:59:59';
            $rows = $this->fetchLeads($start_date, $end_date, session('email') ?? null, session('campaign') ?? null, null, false);
        } else {
            $rows = [];//Initial request
        }

        return response()->view('backend.lead_index', [
            'rows' => $rows,
            'is_excel_export' => true,
        ])->header('Content-Type', 'application/vnd.ms-excel; charset=utf-8')->header('Content-Disposition', "attachment;Filename=h5_leads{$date}.xls");
    }
}
