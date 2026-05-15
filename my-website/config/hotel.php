<?php 
return [
'rooms' => [
            [
            "id" => 1,
            "title" => 'Deluxe Room',
            "image" => 'images/rooms/room1.jpg',
            "description" => 'Spacious room with mountain views, spa access, and a fully stocked kitchenette.',
            "long_description" => 'Indulge in alpine luxury with our Deluxe Room, a spacious sanctuary that perfectly pairs traditional Swiss elegance with modern comfort. Wake up every morning to spectacular, unobstructed mountain views framed by panoramic windows, best enjoyed with a fresh espresso on your private balcony. The room features a sleek, fully stocked kitchenette, giving you the perfect blend of independence and convenience to prepare intimate meals or light snacks at your own pace. To elevate your stay into a true wellness retreat, you will enjoy complimentary, unlimited access to our world-class resort spa, offering heated pools and soothing saunas to rejuvenate your body and soul after a day on the slopes.',
            "display_price" => '$350/night',
            "price" => 350,
            "link" => '/book',
            "guests" => 'Up to 5 Guests',
            "bed" => '2 Queen Beds & 1 King Single',
            "view" => 'Mountain View',
            "wifi" => 'Free Wi-Fi',
            "bathroom" => 'Full bathroom',
            "kitchenette" => 'Kitchenette',
            "max_booking_length" => 7
            ],
            [
            "id" => 2,
            "title" => 'Suite',
            "description" => 'Luxury suite with separate living area and jacuzzi.',
            "long_description" => 'Experience the perfect blend of luxury and value in our exceptional Suite, a beautifully designed space featuring a completely separate living area for ultimate comfort and relaxation. This elegant retreat offers plenty of room to unwind, whether you are entertaining guests or enjoying a quiet evening in. The true highlight of your stay is the private in-room jacuzzi, providing a tranquil, spa-like experience right in the comfort of your own suite. It is the ultimate choice for those seeking premium luxury and extra space at a slightly more accessible price point.',
            "display_price" => '$200/night',
            "price" => 200,
            "link" => '/book',
            "guests" => 'Up to 4 Guests',
            "bed" => '2 Queen Beds',
            "view" => 'Mountain View',
            "wifi" => 'Free Wi-Fi',
            "bathroom" => 'En-suite bathroom',
            "kitchenette" => null,
            "max_booking_length" => 7,
            "image" => 'images/rooms/room2.jpg'
            ],
            [
            "id" => 3,
            "title" => 'Standard Room',
            "description" => 'Cozy room with all the essentials and a garden view.',
            "long_description" => 'Embrace the warmth and charm of our Standard Room, a cozy retreat perfectly tailored for guests who appreciate comfort, simplicity, and natural beauty. Designed with a focus on relaxed functionality, this inviting space comes equipped with all the modern essentials you need for a seamless and peaceful stay. The true highlight is the lovely garden view right outside your window, offering a serene backdrop of lush greenery and vibrant alpine flora. It is the perfect, budget-friendly choice for travelers seeking a quiet, comfortable home base to return to after a full day of exploring.',
            "display_price" => '$180/night',
            "price" => 180,
            "link" => '/book',
            "guests" => 'Up to 2 Guests',
            "bed" => '1 Queen Bed',
            "view" => 'Garden View',
            "wifi" => 'Free Wi-Fi',
            "bathroom" => 'En-suite bathroom',
            "kitchenette" => null,
            "max_booking_length" => 7,
            "image" => '/images/rooms/room3.jpg'
            ]
        ],
    'fa_icons' => [
        'guests' => '<i class="fa-solid amenities fa-user-group me-2"></i>',
        'bed' =>'<i class="fa-solid amenities fa-bed me-2"></i>',
        'view' => '<i class="fa-solid amenities fa-mountain-sun me-2"></i>',
        'wifi' => '<i class="fa-solid amenities fa-wifi me-2"></i>',
        'bathroom' => '<i class="fa-solid amenities fa-shower me-2"></i>',
        'kitchenette' => '<i class="fa-solid amenities fa-kitchen-set me-2"></i>'
    ]
];