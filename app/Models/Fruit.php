<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    protected $table = "fruits";
    protected $fillable = [
        "name",
        "image"
    ];

    public function pivotFruit() {
        return $this->belongsToMany(PivotFruit::class);
    }
}
