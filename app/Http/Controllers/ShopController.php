<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request, $id = null)
{
    $products = Product::query();
    $categories = Category::withCount('products')->get();
    $brands = Brand::withCount('products')->get();

    $selectedCategory = null;
    $selectedBrand = null;

    // Kiểm tra nếu đang chọn category
    if ($request->route()->getName() === 'category.index') {
        $selectedCategory = Category::find($id);
        $products->where('category_id', $id);
    }

    // Kiểm tra nếu đang chọn brand
    if ($request->route()->getName() === 'brand.index') {
        $selectedBrand = Brand::find($id);
        $products->where('brand_id', $id);
    }

    // Các bộ lọc khác
    if ($request->has('min_price') && $request->has('max_price')) {
        $products->whereBetween('price', [$request->min_price, $request->max_price]);
    }

    if ($request->has('search')) {
        $products->where('name', 'like', '%' . $request->search . '%');
    }

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

    // Kiểm tra nếu là AJAX request
    if ($request->ajax()) {
        return view('shop.components.product-grid', ['products' => $products])->render();
    }

    return view('shop.index', [
        'products' => $products,
        'categories' => $categories,
        'brands' => $brands,
        'selectedCategory' => $selectedCategory,
        'selectedBrand' => $selectedBrand,
    ]);
}


}
