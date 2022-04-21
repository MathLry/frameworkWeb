<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    protected $table = "cocktails";
    protected $fillable = [
        "id_cocktail",
        "id_alcohol"
    ];

    public function cocktail() {
        return $this->belongsToMany();
    }
}
