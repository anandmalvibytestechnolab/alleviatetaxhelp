<?php

namespace App\Http\Controllers\Backend;

use App\Exports\UsersExport;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class LeadsExportController extends BaseLeadController
{
    public function index()
    {
        $page = request()->query('page');
        $fileName = $page . '_' . time() . Str::random();
        $today = Carbon::today()->toDateString();
        $start_date = (session('start_date')) ? session('start_date') : $today . ' 00:00:00';
        $end_date = (session('end_date')) ? session('end_date') : $today . ' 23:59:59';
        $rows = $this->fetchLeads($start_date, $end_date, '', 'YES', $page);
        $data = ['data' => $rows, 'page' => $page];
        return Excel::download(new UsersExport($data), $fileName . '.csv');
    }
}
