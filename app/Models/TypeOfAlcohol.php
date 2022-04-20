<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfAlcohol extends Model
{
    use HasFactory;
    protected $table="types_Of_Alcohol";
    protected $fillable = [
        "name"
    ];
}
