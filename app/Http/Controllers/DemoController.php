<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //single parameter
    function MyName($namevalure){
        return $namevalure;
    }
    // multiple parameter
    function MyFullName($firstName, $middleName, $lastName){

        // return "First Name:" .$firstName. "<br> Middle Name:".$middleName. "<br> Last Name:" .$lastName;
        // passing data into view
        return view('DemoView', ['firstkey'=>$firstName, 'middlekey'=>$middleName, 'lastkey'=>$lastName]);
    }
}
