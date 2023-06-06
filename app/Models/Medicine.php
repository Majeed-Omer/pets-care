<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
    	'name',
        'contents',
        'animal_id',
        'price',
        'image',
        'clinic_name',
        'clinic_location',
    ];
}