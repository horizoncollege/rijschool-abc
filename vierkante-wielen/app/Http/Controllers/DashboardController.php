<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:admin-dashboard-view|admin-dashboard-create|admin-dashboard-edit|admin-dashboard-delete'], ['only' => ['index', 'show']]);
    }

    public function index() {
        return view('dashboard');
    }

}
