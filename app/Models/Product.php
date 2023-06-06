<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $table = 'product';

    protected $fillable = [
    	'name',
        'animal_id',
        'contents',
        'price',
        'image',
        'store_name',
        'store_location'
    ];
}