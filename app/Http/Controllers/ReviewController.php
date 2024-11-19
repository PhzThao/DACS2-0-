<?php
namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'content' => 'required|string|max:1000',
        'rating' => 'required|integer|between:1,5',
    ]);

    // Create a new review
    Review::create([
        'content' => $validated['content'],
        'rating' => $validated['rating'],
        'user_id' => auth()->id(),  // Assuming the user is logged in
        'product_id' => $request->input('product_id'),
    ]);

    return redirect()->back()->with('success', 'Review submitted successfully!');
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'You must be logged in to submit a review.');
    }
    
}
}
