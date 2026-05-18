<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class create_booking extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insert = [
            ["room_id" => 1,
            "start_date" => '2026-05-20',
            "end_date" => '2026-05-25',
            "guest_id" => 1,
            "guests" => 1,
            "total_cost" => 1750.00,
            "booking_code" => 'li40Of34aersoMe2Juzhaupo',
            "booking_notes" => 'Ensure 5 bottles of milk available in kitchenette for her arrival.'],
           ["room_id" => 2,
            "start_date" => '2026-05-15',
            "end_date" => '2026-05-17',
            "guest_id" => 1,
            "guests" => 1,
            "total_cost" => 600.00,
            "booking_code" => 'K2h7quHycTW7Sg84Cf8g8nUs',
            "booking_notes" => 'She is very particular about her milk.'],
            ["room_id" => 1,
            "start_date" => '2026-06-01',
            "end_date" => '2026-06-08',
            "guest_id" => 2,
            "guests" => 1,
            "total_cost" => 2450.00,
            "booking_code" => '9VzGG86w0bdQVHMVHnfyZkcn',
            "booking_notes" => 'Make sure the fridge is FULL of TimTams. We CANNOT have a repeat of last year.'],
            ["room_id" => 3,
            "start_date" => '2026-06-03',
            "end_date" => '2026-06-04',
            "guest_id" => 1,
            "guests" => 1,
            "total_cost" => 360.00,
            "booking_code" => 'lRxGBRzEFMYMFU8Gj8aQMWYB',
            "booking_notes" => 'Wants to check-out at 11:00am on the 4th.']
        ];
        \App\Models\Booking::insert($insert);
    }
}
