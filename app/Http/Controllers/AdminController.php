<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\User; 

class AdminController extends Controller
{
    // Trang Accounts
    public function showAccounts()
    {
        $accounts = User::paginate(10); // Lấy tất cả tài khoản với phân trang
        return view('admin.accounts', compact('accounts'));
    }


    // Cập nhật tài khoản
    public function updateAccount(Request $request, $id)
    {
        $account = User::findOrFail($id);
        $account->update($request->all()); // Cập nhật tài khoản

        return redirect()->route('accounts.index')->with('success', 'Account updated successfully!');
    }
    

    // Xóa tài khoản
    public function deleteAccount($id)
    {
        $account = User::findOrFail($id);
        $account->delete();

        return redirect()->route('accounts.index')->with('success', 'Account deleted successfully!');
    }

    // Trang Products
    public function showProducts()
    {
        $products = Product::paginate(10);  // Sử dụng paginate thay vì all

        // Trả về view với dữ liệu sản phẩm
        return view('admin.products', ['products' => $products]);
    // Tạo view 'admin/products.blade.php'
    }

    // Trang Orders
    public function showOrders()
    {
        return view('admin.orders'); // Tạo view 'admin/orders.blade.php'
    }

    // Trang Comments 
    public function showComments()
    {
        $reviews = Review::with('product', 'user')->paginate(10);
        return view('admin.comments',['reviews'=>$reviews]); // Tạo view 'admin/comments.blade.php'
    }

    // Trang Statistics
    public function showStatistics()
    {
        return view('admin.statistics'); // Tạo view 'admin/statistics.blade.php'
    }
}
