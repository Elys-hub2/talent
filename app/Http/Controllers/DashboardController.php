<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\AdminAuthenticated;

class DashboardController extends Controller
{
    public function __invoke()
    {
        //
    }

    public function __construct()
    {
        $this->middleware('admin:admin');
    }

    public function index()
    {
        return view('dashboard');
    }
   
}
