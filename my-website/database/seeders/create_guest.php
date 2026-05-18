<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class create_guest extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insert = [
            "first_name" => 'Kuro',
            "last_name" => 'Cowley',
            "country_code" => '+61',
            "mobile" => '402684265',
            "email" => 'kurocowley@gmail.com',
            "guest_notes" => 'Gets exceedingly bad midnight zoomies and WILL disturb the other guests. Try to book her with empty rooms adjacent.'
        ];
        \App\Models\Guest::insert($insert);
    }
}
