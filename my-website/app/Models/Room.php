<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['title','image','description','long_description','price_pn','guests','bed','view','wifi','bathroom','kitchenette'];  

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
