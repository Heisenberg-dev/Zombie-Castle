<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function page1()
    {
        return view('page1');
    }

    public function page2()
    {
        return view('page2');
    }

    public function page3()
    {
        return view('page3');
    }

    public function withParameter($parameter)
    {
        return "This page uses a parameter: " . $parameter;
    }


}
