<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MaxMind\Db\Reader;

class HomePageController extends Controller
{
    public function show()
    {
        return view('frontend.home')->with(['user_state' => $this->getUserState()]);
    }

    private function getUserState()
    {
        $ipAddress = request()->ip();
        $databaseFile = storage_path('/maxmind/GeoLite2-City.mmdb');
        try {
            $reader = new Reader($databaseFile);
            //$ipAddress = '174.128.240.189';//Colorado
            $info = $reader->get($ipAddress);
            d($info);
            if(!empty($info) && !empty($info['subdivisions']) &&
                !empty($info['subdivisions'][0]) &&
                !empty($info['subdivisions'][0]['iso_code']) &&
                gettype($info['subdivisions'][0]['iso_code']) === 'string'
            ){
                return $info['subdivisions'][0]['iso_code'];
            }
        } catch (\Exception $e) {
            log_error_to_file('maxmind-db-errors', $e->getMessage());
        }
        $reader->close();
    }
}
