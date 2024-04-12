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

        $events = array();
        $bookings = Booking::all();

        // hier moet pulldown komen met schakel,automaat en handicapt.
        foreach ($bookings as $booking) {
            $color = null;
            if($booking->title == 'Schakel'){
                $color =  '#924ACE';
            }
            if($booking->title == 'Automaat'){
                $color =  '#68B01A';
            }
            if($booking->title == 'Handicapt'){
                $color =  'red';
            }
            if($booking->title == 'schakel'){
                $color =  '#924ACE';
            }
            if($booking->title == 'automaat'){
                $color =  '#68B01A';
            }
            if($booking->title == 'handicapt'){
                $color =  'red';
            }

            $events[] = [
                'id' => $booking->id,
                'title' => $booking->title,
                'start' => $booking->start_date,
                'end' => $booking->end_date,
                'color' => $color,
                // 'color' => 'black',
                'textColor' => '#CBD5D4',
                'border' => 'green',
            ];
        }



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
