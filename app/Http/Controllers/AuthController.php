<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    // Hiển thị form đăng ký
    public function showRegistrationForm()
    {
        return view('pages.register');  // Đảm bảo bạn có view 'register' trong resources/views/pages
    }

    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('pages.login');  // Đảm bảo bạn có view 'login' trong resources/views/pages
    }

    public function showLoginadForm()
    {
        return view('pages.loginad');  
    }

    // Đăng ký người dùng
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Thêm validation cho avatar
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar')->store('avatars', 'public'); // Lưu ảnh vào thư mục storage/app/public/avatars
        } else {
            $avatar = null; // Nếu không có ảnh, giữ giá trị null
        }
        
        // Tạo người dùng mới và đăng nhập tự động
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $avatar,  // Lưu đường dẫn ảnh đại diện
        ]);

         // Đăng nhập người dùng ngay sau khi đăng ký thành công
         auth('web')->login($user);

         // Thông báo đăng ký thành công và chuyển hướng tới trang đăng nhập
         return redirect()->route('login')->with('success', 'Đăng ký thành công, vui lòng đăng nhập!');

        
    }

    // Đăng nhập người dùng
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (true) {
            return redirect()->route('home');  // Chuyển hướng đến trang chủ sau khi đăng nhập
        }

        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }

    // Đăng xuất người dùng
    public function logout()
    {
        auth('web')->logout();  // Đăng xuất
        return redirect()->route('login');  // Chuyển hướng đến trang đăng nhập
    }

    public function loginad(Request $request)
{
    $credentials = $request->only('email', 'password');

    // Xác thực với model Admin thay vì User
    if (Auth::guard('admin')->attempt($credentials)) {
        return redirect()->route('homead');  // Chuyển hướng đến trang chủ sau khi đăng nhập thành công
    }

    return back()->withErrors([
        'email' => 'Thông tin đăng nhập không chính xác.',
    ]);
}

public function logoutAdmin()
{
    Auth::guard('admin')->logout();  // Đăng xuất admin
    return redirect()->route('loginad');  // Chuyển hướng về trang đăng nhập admin
}

}
