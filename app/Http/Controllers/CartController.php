<?php
// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Hiển thị giỏ hàng
    public function index()
    {
        $cart = session()->get('cart', []); // Lấy dữ liệu giỏ hàng từ session
        return view('pages.cart', ['cart' => $cart]);
 // Truyền dữ liệu giỏ hàng sang view
    }

    // Thêm sản phẩm vào giỏ
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);
        $productId = $request->product_id;
        $quantity = $request->quantity;
    
        // Add or update the product in the cart
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'id' => $request->product_id,
                'name' => $request->product_name,
                'price' => $request->product_price,
                'quantity' => $quantity,
                'image' => $request->product_image,
            ];
        }
    
        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }
    

    // Xóa sản phẩm khỏi giỏ
    // In CartController.php

    public function remove($productId)
{
    $cart = session()->get('cart', []);
    foreach ($cart as $key => $item) {
        if ($item['id'] == $productId) {
            unset($cart[$key]);
            break;
        }
    }

    session()->put('cart', $cart);
    return redirect()->route('cart.index')->with('success', 'Product removed from cart');
}

    
}
