<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Product extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'name',
//         'description',
//         'price',
//         'image',
//         'category',
//         'brand',
//     ];
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name if it's not the default plural form
    protected $table = 'products';

    // Specify fillable fields for mass assignment
    protected $fillable = [
        'name', 'description', 'price', 'image', 'category_id', 'brand_id', 'stock', 'image1', 'image2', 'image3',
    ];

    // Define the relationship between Product and Review
    public function reviews()
    {
        return $this->hasMany(Review::class); // One product can have many reviews
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
