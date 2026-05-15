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
            "email" => 'natashacowleyaus@gmail.com',
            "guest_notes" => 'Gets midnight zoomies. WILL disturb the other guests. Charge extra.'
        ];
        \App\Models\Guest::insert($insert);
    }
}
