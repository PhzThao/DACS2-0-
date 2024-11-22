<?php
// app/Models/Cart.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'product_id',  // Product ID
        'quantity',    // Product quantity
        'image',       // Product image
        'price',       // Product price
        'user_id',     // User ID
    ];

    // Relationship with products table
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Relationship with users table
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Method to calculate total price of the cart (price * quantity)
    public function getTotalPriceAttribute()
    {
        return $this->price * $this->quantity;
    }
}
