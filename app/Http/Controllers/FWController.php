<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
class FWController extends Controller
{
    public function index()
    {
        return view('index0209');
    }

    public function art()
    {
        return view('art0209');
    }
    public function contact()
    {
        return view('con0209');
    }


}
