<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class SystemController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    // my controllers


    public function dashboard(){
        return view('portal.dashboard');

    }
    public function tab(){
        return view('portal.category.tab');
    }

    public function insertdata1(){
        $CategoryModel = new Category();
        $CategoryModel ->insert1();
        echo "Record inserted";

    }


    public function insertdata2(){
        $CategoryModel = new Category();
        $CategoryModel ->insert2();
        echo "Record inserted";

        
    }


    // tableau 
    public function tab1(){
        return view('portal.education.edu_tab');
    }
}
