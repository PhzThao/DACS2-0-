<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nếu tên bảng không phải là "users", bạn cần chỉ định rõ tên bảng:
    // protected $table = 'your_table_name';

    // Các thuộc tính có thể điền vào (fillable)
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',  // Thêm trường avatar nếu có
    ];

    // Các trường cần ẩn khi trả về dữ liệu
    protected $hidden = [
        'password',  // Mật khẩu sẽ bị ẩn trong khi trả về thông tin
    ];

    // Các trường cần chuyển đổi thành kiểu dữ liệu Carbon (ngày giờ)
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

