<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insert = [
            ["question" => 'Can I extend my stay after I\'ve already booked?',
            "answer" => 'You can ask our friendly staff at reception if you decide to stay longer than originally planned. If there are no bookings for your selected room then we\'ll happily accommodate you! Otherwise we can make a separate booking in any of our other available rooms so you can extend your magical holiday.',
            "img_url" => '/images/rooms/room4.jpg'],
            ["question" => 'Where can I book a tour of the mountains?',
            "answer" => 'We\'re partnered with Generic Tour Company to help make your stay as seamless and easy as possible! Ask any of our friendly staff to book you in for a tour at a time that suits you.',
            "img_url" => '/images/tours_img.jpg'],
            ["question" => 'What\'s your cancellation policy?',
            "answer" => 'You can cancel for free any time before your booking. We understand that life can get complicated, and we want to accommodate you in any way you can, even if that means you decide to stay with us some other time!',
            "img_url" => '/images/cancellations.jpg']
        ];
        \App\Models\FAQs::insert($insert);
    }
}
