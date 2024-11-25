<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'id_doctor', 
        'id_user_address', 
        'date', 
        'time',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctor', 'id_doctor');
    }

    public function userAddress()
    {
        return $this->belongsTo(UserAddress::class, 'id_users_address', 'id_users_address');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

