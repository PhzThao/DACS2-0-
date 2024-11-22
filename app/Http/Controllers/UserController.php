<?php 
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Hiển thị thông tin người dùng
    public function show($id)
    {   
        // Tìm người dùng theo ID
        $user = User::findOrFail($id);  // Nếu không tìm thấy người dùng, sẽ trả về 404 lỗi

        // Trả về view và truyền biến user vào view
        return view('pages.profile', ['user' => $user]);
    }
}
