<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    //
    function requestRead(){
        return Http::get("http://192.168.43.247/rand");
    }
}
