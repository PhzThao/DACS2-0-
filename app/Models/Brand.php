<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    // Các trường có thể được gán đại diện
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Get the products associated with the brand.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
