<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stolen_missing extends Model
{
    use HasFactory;

    protected $fillable = ['reward', 'email', 'phone_number', 'stolen_lost_date', 'pet_case', 'description', 'picture'];
}
