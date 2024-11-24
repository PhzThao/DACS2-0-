<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable; // Đảm bảo rằng có thể gửi thông báo

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'admins'; // Chú ý rằng tên bảng thường là số nhiều và chuẩn theo Laravel

    // Các cột có thể gán hàng loạt (mass assignable)
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Các cột sẽ bị ẩn (hidden)
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Các cột cần được chuyển đổi sang kiểu dữ liệu Carbon/DateTime
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Có thể bổ sung các phương thức tùy chỉnh khác ở đây
}
