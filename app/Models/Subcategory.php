<?php

namespace App\Models;

use App\Models\{Category, Product};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // ------------------------------ RELACIONES ------------------------------
    // Relación uno a muchos (inversa)
    public function category(){
        return $this->belongsTo(Category::class);
    }
    // Relación uno a muchos
    public function products() {
        return $this->hasMany(Product::class);
    }

}
