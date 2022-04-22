<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function Myself(){
        return 'I love Programming';
    }
    function Yourself(){
        return 'Ypu love Programming';
    }

    function MyHome(){
        $Newvalue = '<script> alert("atack")</script>';
        $country = array('Bangladesh', 'India', 'Nepal', 'Pakistan'); 
        $status = true;
        return view('Home', ['Newvaluekey'=>$Newvalue, 'Datakey'=>$country, 'statuskey'=>$status]);
    }
}
