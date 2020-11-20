<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Users;
use GuzzleHttp\Middleware;

class UserController extends Controller{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    // index function 
    public  function index()
    {
        return view('portal.users.index');
    }
}





