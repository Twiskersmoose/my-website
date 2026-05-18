<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['first_name','last_name','country_code','mobile','email','guest_notes'];  

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
