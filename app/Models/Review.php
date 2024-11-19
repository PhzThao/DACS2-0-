<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['product_id', 'user_id', 'content', 'rating'];

    // Define the inverse relationship (many reviews belong to one product)
    public function product()
    {
        return $this->belongsTo(Product::class); // Each review belongs to a product
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class); // Each review is created by a user
    }
}
