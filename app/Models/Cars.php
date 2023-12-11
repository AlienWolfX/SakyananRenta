<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate_number',
        'car_name',
        'description',
        'car_model_year',
        'color',
        'rate',
    ];
}
