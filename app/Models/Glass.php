<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glass extends Model
{
    use HasFactory;

    protected $table = "glasses";
    protected $fillable = [
        "name",
        "image"
    ];

    public function pivotGlass() {
        return $this->belongsToMany(PivotGlass::class);
    }
}