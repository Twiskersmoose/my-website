<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\FAQs;

class HomeController extends Controller
{
    // this is all PHP

    public function index(){
        $test = 1 + 1;
        $testArr = [
            "var_A" => 1234567,
            "var_B" => $this->Calc(1,4)
        ];

        return view('home.home',["test_var" => $testArr]);
    }

    public function load_rooms(){
        $rooms_array = Room::all();
        return view('rooms.rooms', ['room_array' => $rooms_array]);
    }
    public function load_faqs(){
        $faqs_array = FAQs::all();
        return view('home.faqs', ['faqs' => $faqs_array]);
    }
    

    public function Calc($number1,$number2){
        return $number1 + $number2;
    }


}

