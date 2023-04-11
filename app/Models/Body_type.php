<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body_type extends Model
{
    use HasFactory;

    protected $table = "body_types";
    protected $primaryKey = "body_type_id";
    

}
