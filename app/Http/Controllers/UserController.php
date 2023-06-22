<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        //
    }

    public function __construct()
    {
        $this->middleware('admin:user');
    }

    public function index()
    {
        return view('dashboard');
    }
}
