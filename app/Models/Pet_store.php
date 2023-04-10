<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet_store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number', 'address', 'equipment_id', 'species_id'];
}
