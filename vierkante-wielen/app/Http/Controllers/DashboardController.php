<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:admin-dashboard-view|admin-dashboard-create|admin-dashboard-edit|admin-dashboard-delete'], ['only' => ['index', 'show']]);
    }

    public function index()
    {
        // Haal de evenementen op uit de database
        $events = Booking::all();

        // Stuur de evenementen naar de view
        return view('dashboard', compact('events'));
    }

    public function showDashboard()
    {
        // Haal de evenementen op uit de database
        $events = Booking::all();

        // Stuur de evenementen naar de view
        return view('dashboard', compact('events'));
    }
}
