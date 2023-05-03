<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet_clinic extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number', 'address', 'location', 'veterinarian', 'medicine_id'];
}
