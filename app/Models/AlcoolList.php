<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlcoolList extends Model
{
    use HasFactory;
    protected $table ="alcool_list";
    protected $fillable = [
        "name",
        "degre",
        "alcool_type"

    ];
}
