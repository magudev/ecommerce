<?php

namespace App\Models;

use App\Models\{Product, Color};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'product_id'];

    // ------------------------------ RELACIONES ------------------------------
    // Relación uno a muchos (inversa)
    public function product() {
        return $this->belongsTo(Product::class);
    }

    // Relación muchos a muchos
    public function colors() {
        return $this->belongsToMany(Color::class);
    }
}
