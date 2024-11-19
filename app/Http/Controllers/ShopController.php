<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query();

        // Apply filters
        if ($request->has('category')) {
            $products->where('category', $request->category);
        }

        if ($request->has('min_price') && $request->has('max_price')) {
            $products->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        if ($request->has('brand')) {
            $products->where('brand', $request->brand);
        }

        if ($request->has('search')) {
            $products->where('name', 'like', '%' . $request->search . '%');
        }

        // Apply sorting
        $sort = $request->get('sort', 'latest');
        switch ($sort) {
            case 'price_low_high':
                $products->orderBy('price', 'asc');
                break;
            case 'price_high_low':
                $products->orderBy('price', 'desc');
                break;
            default:
                $products->latest();
                break;
        }

        $products = $products->paginate(12);

        return view('shop.index', compact('products'));
    }
}