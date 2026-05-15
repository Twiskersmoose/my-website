<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller {
    public function load_book(){
        $room_1_array = [
            "name" => 'Deluxe Room',
            "available_from" => '2026-07-01',
            "bookings" => [1 => ["start" => '2026-07-05', "end" => '2026-07-09'],
                          2 => ["start" => '2026-07-16', "end" => '2026-07-21']],
            "max_booking_length" => 7
        ];
        return view('rooms.book',["room_array" => $room_1_array]);
    }
}
