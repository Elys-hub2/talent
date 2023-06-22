<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AdminAuthenticated;

class EmployeController extends Controller
{
    public function __invoke()
    {
        //
    }

    public function __construct()
    {
        $this->middleware(AdminAuthenticated::class, ['admin:employe']);
        $this->middleware('admin:employe');
    }

    public function index()
    {
        return view('Dashboardemploye');
    }
}
