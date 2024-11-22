<?php
namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để gửi đánh giá.');
        }

        // Xác thực đầu vào
        $validated = $request->validate([
            'content' => 'required|string|max:1000',
            'rating' => 'required|integer|between:1,5',
            'product_id' => 'required|exists:products,id', // Đảm bảo product_id tồn tại trong bảng products
        ]);

        // Tạo đánh giá mới
        Review::create([
            'content' => $validated['content'],
            'rating' => $validated['rating'],
            'user_id' => auth()->id(),  // Lấy ID người dùng đã đăng nhập
            'product_id' => $validated['product_id'], // Lấy product_id đã xác thực
        ]);

        // Chuyển hướng lại với thông báo thành công
        return redirect()->back()->with('success', 'Đánh giá của bạn đã được gửi!');
    }
     // Hiển thị danh sách reviews
     public function index()
     {
         $reviews = Review::with('product', 'user')->paginate(10); // Lấy tất cả reviews cùng với thông tin sản phẩm và người dùng
         return view('admin.comments', ['reviews'=>$reviews]);
     }
}


