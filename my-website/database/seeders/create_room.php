<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class create_room extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insert = [
            ["title" => 'Deluxe Room',
            "image" => 'room1',
            "description" => 'Spacious room with mountain views, spa access, and a fully stocked kitchenette.',
            "long_description" => 'Indulge in alpine luxury with our Deluxe Room, a spacious sanctuary that perfectly pairs traditional Swiss elegance with modern comfort. Wake up every morning to spectacular, unobstructed mountain views framed by panoramic windows, best enjoyed with a fresh espresso on your private balcony. The room features a fully stocked kitchenette, giving you the perfect blend of independence and convenience to prepare intimate meals or light snacks at your own pace.',
            "price_pn" => 350,
            "guests" => 5,
            "beds" => '2 Queen Beds & 1 King Single',
            "view" => 'Mountain Views',
            "wifi" => 'Free Wi-Fi',
            "bathroom" => 'Full bathroom & bath',
            "kitchenette" => 'Kitchenette'],
            ["title" => 'Suite',
            "image" => 'room2',
            "description" => 'Luxury suite with separate living area and jacuzzi.',
            "long_description" => 'Experience the perfect blend of luxury and value in our exceptional Suite, a beautifully designed space featuring a completely separate living area for ultimate comfort and relaxation. This elegant retreat offers plenty of room to unwind, whether you are entertaining guests or enjoying a quiet evening in. The true highlight of your stay is the private in-room jacuzzi, providing a tranquil, spa-like experience right in the comfort of your own suite. It is the ultimate choice for those seeking premium luxury and extra space at a slightly more accessible price point.',
            "price_pn" => 200,
            "guests" => 4,
            "beds" => '2 Queen Beds',
            "view" => 'Mountain View',
            "wifi" => 'Free Wi-Fi',
            "bathroom" => 'En-suite bathroom',
            "kitchenette" => null],
            ["title" => 'Standard Room',
            "image" => 'room3',
            "description" => 'Cozy room with all the essentials and a garden view.',
            "long_description" => 'Embrace the warmth and charm of our Standard Room, a cozy retreat perfectly tailored for guests who appreciate comfort, simplicity, and natural beauty. Designed with a focus on relaxed functionality, this inviting space comes equipped with all the modern essentials you need for a seamless and peaceful stay. The true highlight is the lovely garden view right outside your window, offering a serene backdrop of lush greenery and vibrant alpine flora. It is the perfect, budget-friendly choice for travelers seeking a quiet, comfortable home base to return to after a full day of exploring.',
            "price_pn" => 180,
            "guests" => 2,
            "beds" => '1 Queen Bed',
            "view" => 'Garden View',
            "wifi" => 'Free Wi-Fi',
            "bathroom" => 'En-suite bathroom',
            "kitchenette" => null]
        ];

        foreach($insert as $row){
            \App\Models\Room::updateOrCreate(["title" => $row["title"]],$row);
        }
    }
}