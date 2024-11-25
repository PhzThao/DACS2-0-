<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctor'; // Chỉ định bảng tương ứng

    protected $fillable = [
        'name_doctor', 
        'doctor_avartar', 
        'doctor_title', 
        'doctor_booking_price', 
        'start_time', 
        'end_time', 
        'doctor_experience', 
        'doctor_skills', 
        'doctor_info'
    ];

    public $timestamps = false; // Nếu bảng không sử dụng created_at và updated_at

    // Chỉ định khóa chính của bảng
    protected $primaryKey = 'id_doctor'; // Đặt khóa chính là 'id_doctor' thay vì 'id'

    // Quan hệ với bảng service_of_doctor
    public function services()
    {
        return $this->hasMany(Service::class, 'id_doctor');
    }

    // Quan hệ với bảng doctor_feedback
    public function reviews()
    {
        return $this->hasMany(ReviewDoctor::class, 'id_doctor');
    }
}
