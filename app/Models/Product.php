<?php

namespace App\Models;

use App\Models\{Brand, Subcategory, Color, Size, Image};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // ------------------------------ RELACIONES ------------------------------
    // Relación uno a muchos (inversa)
    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    // Relación uno a muchos (inversa)
    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    // Relación muchos a muchos 
    public function colors() {
        return $this->hasMany(Color::class);
    }

    // Relación muchos a muchos 
    public function sizes() {
        return $this->hasMany(Size::class);
    }

    // Relación uno a muchos polimórfica
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }

}
