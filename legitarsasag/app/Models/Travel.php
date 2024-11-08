<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected  $primaryKey = 'travel_id';
    protected $fillable = [
        'evaluation',
        'flight_id',
        'user_id',
    ];
    /** @use HasFactory<\Database\Factories\TravelFactory> */
    use HasFactory;
}
