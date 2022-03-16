<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //   protected $fillable = [
    //     'firstName',
    //     'lastName',
    //     'lastName',
    //     'lastName',
    //     'lastName',


    // ];
      protected $table = 'bookings';
    protected $guarded = [];
    use HasFactory;
}
