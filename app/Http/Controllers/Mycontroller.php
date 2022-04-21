<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //single action controller
    function __invoke(){

        return ' im single action controller';
    }
}
