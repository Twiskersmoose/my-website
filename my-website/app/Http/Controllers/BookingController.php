<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Room;

class BookingController extends Controller {
    public function load_book(Request $request){
        $id = $request->query('room_id');
        // dd($id);
        $room = Room::findOrFail($id);
        // dd($room);
        // $room = collect($rooms)->firstWhere('id', $id);
        $date = Carbon::create(2026, 5, 1);
        $daysInMonth = $date->daysInMonth;

        $existing_bookings = [
            ["room_id" => 1,
            "booking_start" => '2026-05-20',
            "booking_end" => '2026-05-25'],
            ["room_id" => 2,
            "booking_start" => '2026-05-15',
            "booking_end" => '2026-05-17'],
            ["room_id" => 1,
            "booking_start" => '2026-06-01',
            "booking_end" => '2026-06-08'],
            ["room_id" => 3,
            "booking_start" => '2026-06-03',
            "booking_end" => '2026-06-04'],
        ];
        $filter_bookings = array_filter($existing_bookings, function($booking) use ($id){
            return $booking['room_id'] == $id;
        });
        // dd($room);
        return view('rooms.book', [
            "daysInMonth" => $daysInMonth,
            "monthName" => $date->format('F'),
            "year" => $date->year,
            "monthNum" => $date->month,
            "room_id" => $id,
            "bookings" => array_values($filter_bookings)
        ], ['room' => $room]);
    }
}