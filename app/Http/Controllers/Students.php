<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Students extends Controller
{
    function groupOfTwo(){
        $array = ["ali","charbel","hsein","Pablo","Jean Paul","Lama","Stephanelle"];
        foreach(array_chunk($array, 2) as $values) {
            echo implode('|||', $values)."\n";
        }
    }
}
