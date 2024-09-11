<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        echo "ss";
    }
    public function map(){
        return view('test');
    }
}
