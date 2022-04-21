<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syrup extends Model
{
    use HasFactory;

    protected $table = "syrups";
    protected $fillable = [
        "name",
        "image"
    ];

    public function pivotSyrup() {
        return $this->belongsToMany(PivotSyrup::class);
    }
}