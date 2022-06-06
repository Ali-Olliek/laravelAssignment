<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Time extends Controller
{
    function calculateElapsedTime() {
        $time_stamp = strtotime("14 April 1732");
        $current_time = time();
        $elapsed_time = time() - $time_stamp;

        echo $elapsed_time;
    }
}
