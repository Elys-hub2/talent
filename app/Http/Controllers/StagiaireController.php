<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function __invoke()
    {
        //
    }

    public function __construct()
    {
        $this->middleware('admin:stagiaire');
    }

    public function index()
    {
        return view('Dashboardstagi');
    }
}
