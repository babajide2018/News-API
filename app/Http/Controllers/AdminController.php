<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    //

    public function index(){

        $result = Http::get('https://newsapi.org/v2/top-headlines?country=ng&apiKey=7f10504a8fe64d3fad0d69174b6a1c7a');

#return $result;

        return view('test', ([
            'result' => $result,

        ]));
    }
}
