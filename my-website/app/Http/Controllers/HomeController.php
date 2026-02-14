<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function load_pics(){

        return view('home.pics');
    }


    public function Calc($number1,$number2){
        return $number1 + $number2;
    }


}
