<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Support\Str;

class BookingController extends Controller {
    public function load_book(Request $request){
        $id = $request->query('room_id');
        $room = Room::findOrFail($id);
        ///////////////
        do {
            $token = $base64String = base64_encode(Str::random(30));
        } while (Booking::where('booking_code', $token)->exists());

        $bookings = Booking::where('room_id',$id)->whereDate('end_date', '>=', Carbon::today())->get();
        ///////////////
        $date = Carbon::create(2026, 5, 1);
        $daysInMonth = $date->daysInMonth;
        return view('rooms.book', [
            "daysInMonth" => $daysInMonth,
            "monthName" => $date->format('F'),
            "year" => $date->year,
            "monthNum" => $date->month,
            "room_id" => $id,
            "token" => $token,
            "bookings" => $bookings
        ], ['room' => $room]);
    }
}