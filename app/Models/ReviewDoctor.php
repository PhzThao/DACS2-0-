<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewDoctor extends Model
{
    protected $table = 'doctor_feedback';

    protected $fillable = [
        'id_doctor', 
        'id_user', 
        'content_feedback', 
        'creater_feedback_at', 
        'star'
    ];

    public $timestamps = false; // Nếu không có created_at, updated_at

    // Định nghĩa mối quan hệ với bác sĩ
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor');
    }

    // Định nghĩa mối quan hệ với người dùng
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
