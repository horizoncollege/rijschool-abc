<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
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

        return view('calender.index', ['events' => $events]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);

        $booking = Booking::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $color = null;

        if($booking->title == 'Test') {
            $color = '#924ACE';
        }

        return response()->json([
            'id' => $booking->id,
            'start' => $booking->start_date,
            'end' => $booking->end_date,
            'title' => $booking->title,
            'color' => $color ? $color: '',
        ]);
    }
    public function update(Request $request ,$id)
    {
        $booking = Booking::find($id);
        if(! $booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json('Event updated');
    }
    public function destroy($id)
    {
        $booking = Booking::find($id);
        if(! $booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->delete();
        return $id;
    }
}
