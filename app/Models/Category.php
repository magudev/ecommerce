<?php

namespace App\Models;

use App\Models\{Subcategory, Brand, Product};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'icon'];

    // ------------------------------ RELACIONES ------------------------------
    // Relación uno a muchos
    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }

    // Relación muchos a muchos
    public function brands() {
        return $this->belongsToMany(Brand::class);
    }

    // Relación entre categorías y productos
    public function product() {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    
}
