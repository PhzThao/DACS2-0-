<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service_of_doctor';

    protected $fillable = [
        'id_doctor', 
        'id_id_child_service'
    ];

    public $timestamps = false; // Nếu không có created_at, updated_at

    // Định nghĩa mối quan hệ với bác sĩ
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor');
    }
}
