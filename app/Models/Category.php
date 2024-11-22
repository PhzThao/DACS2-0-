<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Accessor for product count (using loaded relation if available).
     */
    public function getProductsCountAttribute()
    {
        // Sử dụng dữ liệu từ eager loading nếu có
        return $this->products_count ?? $this->products()->count();
    }
}
