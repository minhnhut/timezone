<?php

namespace MinhNhut\Timezone;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezoneController extends Controller
{

    public function index($timezone)
    {
        $time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezone::time', [
            'current_time' => $time
        ]);
    }

}