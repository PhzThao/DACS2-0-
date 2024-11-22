<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display the categories page with all categories and brands.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Lấy tất cả danh mục với số lượng sản phẩm (eager loading)
        $categories = Category::withCount('products')->get();

        // Lấy tất cả thương hiệu với số lượng sản phẩm
        $brands = Brand::withCount('products')->get();

        // Lấy sản phẩm phổ biến (đang hoạt động)
        $popular_products = Product::where('is_active', true)
                                    ->orderBy('sold_count', 'desc')
                                    ->take(5)
                                    ->get();

        // Truyền dữ liệu vào view
        return view('shop.components.filter-options',  [
            'categories' => $categories,
            'brands' => $brands,
            'popular_products' => $popular_products
        ]);
    }
}
