<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function testindex(){
        return view('indexdashboard');
    }

    public function testdashboard(){
        return view('dashboard');
    }

    /***
     * 
     * 
     * building a dashboard portal
     */



    public function dataportal(){
        return view('dashboard');
    }

    public function test(){
        return view('testhome');
    }









}
