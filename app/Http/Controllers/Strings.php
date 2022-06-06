<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $url = 'https://icanhazdadjoke.com/slack';

        $response = file_get_contents($url);
        $clean_response = preg_replace('{"text"}', '', $response); //need to hide everything but the text field
        $Data = json_decode($response, true);
        echo $clean_response;

    }

    function fetchBeer(){
        $url = 'https://api.punkapi.com/v2/beers';
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        $index = rand(1,1000);

        echo $index;
        echo $data;
    }

}
