<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;

class AdminController extends Controller {

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return response(['Message' => 'It Works'], 200);
    }
}