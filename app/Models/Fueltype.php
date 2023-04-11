<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fueltype extends Model
{
    use HasFactory;
    
    protected $table = "fueltypes";
    protected $primaryKey = "fuel_type_id";
    
}
