<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet_store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'seller', 'email', 'phone_number', 'address', 'location', 'equipment_id', 'species_id'];
}
