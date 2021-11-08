<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    function getData(){
        return ["name=>nahin","email=>nahin@gmail.com" ];
    }
}
