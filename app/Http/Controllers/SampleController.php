<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $sampleValue = "sample テキストです。";



        return view('sample/index', ["sampleValue" => $sampleValue]);
    }
}
