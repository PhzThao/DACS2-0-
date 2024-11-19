<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ProductsController extends Controller
// {
//     public function index() {
//         $title = 'Laravel Course from Le Quang Tho';
//         $x = 1;
//         $y = 2;
//         $name = 'Tho';
//         // return view('products.index', compact('title', 'x', 'y', 'name'));
//         $myphone = [
//             'name' => 'iphone 14',
//             'year' => 2022,
//             'isFavourite' => true,
//         ];
//         // return view('products.index', compact('myphone'));
//         //send directly 
//         return view('products.index', [
//             'myphone' => $myphone
//         ]);
//     }
//     public function about() {
//         return 'This is About page';
//     }
//     public function detail($id) {
//         return "product's id = ".$id;
//     }
// }


// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id); // Find the product by ID, or throw a 404 error if not found
        return view('shop.product', compact('product')); // Make sure 'product' matches the view file name
    }

    public function index(Request $request)
    {
        // Start a query for the products
        $products = Product::query();

        // Handle search (if there is a search term)
        if ($request->has('search') && $request->search != '') {
            $products->where('name', 'like', '%' . $request->search . '%');
        }

        // Handle sorting (if there's a sorting option selected)
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'price_low_to_high':
                    $products->orderBy('price', 'asc');
                    break;
                case 'price_high_to_low':
                    $products->orderBy('price', 'desc');
                    break;
                case 'latest':
                default:
                    $products->orderBy('created_at', 'desc');
                    break;
            }
        }

        // Paginate the results (10 per page)
        $products = $products->paginate(10);

        // Return the products view with the filtered/sorted products
        return view('shop.components.search-and-sort', compact('products'));
    }

    // Show details for a specific product
    public function about()
    {
        return 'This is the About page';
    }

    // Show the details of a product by ID
    public function detail($id)
    {
        return "Product's ID = " . $id;
    }

    public function search(Request $request)
    {
        $searchTerm = $request->get('search'); // Get the search query

        // Query the products based on the search term
        $products = Product::where('name', 'like', '%' . $searchTerm . '%')
                           ->orWhere('description', 'like', '%' . $searchTerm . '%')
                           ->get();

        // Return the results as JSON
        return response()->json($products);
    }
}