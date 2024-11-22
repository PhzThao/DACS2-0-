<?php


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






    public function index1()
{
    // Lấy tất cả các sản phẩm
    $products = Product::paginate(10); 

    // Trả về view và truyền biến $products vào
    return view('admin.products', compact('products'));
}


    public function store(Request $request)
{
    // Xác thực dữ liệu nhập vào
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        'category' => 'required|string|max:255',
        'brand' => 'required|string|max:255',
        'stock' => 'required|integer',
        'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ]);

    // Xử lý upload ảnh
    $image = $request->file('image')->store('images', 'public');
    $image1 = $request->file('image1') ? $request->file('image1')->store('images', 'public') : null;
    $image2 = $request->file('image2') ? $request->file('image2')->store('images', 'public') : null;
    $image3 = $request->file('image3') ? $request->file('image3')->store('images', 'public') : null;

    // Tạo sản phẩm mới
    Product::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $image,
        'category' => $request->category,
        'brand' => $request->brand,
        'stock' => $request->stock,
        'image1' => $image1,
        'image2' => $image2,
        'image3' => $image3,
    ]);

    return redirect()->route('products.index')->with('success', 'Product added successfully!');
}

public function edit($id)
{
    $product = Product::findOrFail($id);  // Tìm sản phẩm theo ID
    return view('admin.edit', compact('product'));
}

public function update(Request $request, $id)
{
    // Xác thực dữ liệu nhập vào
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'category' => 'required|string|max:255',
        'brand' => 'required|string|max:255',
        'stock' => 'required|integer',
        'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ]);

    $product = Product::findOrFail($id); // Lấy sản phẩm

    // Xử lý upload ảnh nếu có
    if ($request->hasFile('image')) {
        $product->image = $request->file('image')->store('images', 'public');
    }

    if ($request->hasFile('image1')) {
        $product->image1 = $request->file('image1')->store('images', 'public');
    }

    if ($request->hasFile('image2')) {
        $product->image2 = $request->file('image2')->store('images', 'public');
    }

    if ($request->hasFile('image3')) {
        $product->image3 = $request->file('image3')->store('images', 'public');
    }

    // Cập nhật thông tin sản phẩm
    $product->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'category' => $request->category,
        'brand' => $request->brand,
        'stock' => $request->stock,
    ]);

    return redirect()->route('products.index')->with('success', 'Product updated successfully!');
}

public function create()
{
    return view('admin.create');  // Trả về view tạo sản phẩm mới
}

public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
}

}