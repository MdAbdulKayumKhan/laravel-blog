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
}
