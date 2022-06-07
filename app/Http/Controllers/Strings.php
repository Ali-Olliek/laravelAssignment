<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Strings extends Controller
{
    function IsPal($string) {
        $string_to_check = $string;
        $reversed_string = strrev($string_to_check);
        if($reversed_string===$string_to_check){
            echo "Is Palindrome";
        }else{
            echo "Not a Palindrome :/";
        }
    }

   function DadJoke(){
       $response = Http::get("https://icanhazdadjoke.com/slack");
       echo $response["attachments"][0]["text"];
    }


    function fetchBeer(){
        $response = Http::get("https://api.punkapi.com/v2/beers");
        $index = rand(1,24);
        echo $response[$index]["description"];
    }

}
