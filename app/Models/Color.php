<?php

namespace App\Models;

use App\Models\{Product, Size};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // ------------------------------ RELACIONES ------------------------------
    // Relación muchos a muchos
    public function products() {
        return $this->belongsToMany(Product::class);
    }

    // Relación muchos a muchos
    public function sizes() {
        return $this->belongsToMany(Size::class);
    }

}
