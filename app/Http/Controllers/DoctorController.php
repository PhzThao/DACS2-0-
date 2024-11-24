<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    // Hiển thị danh sách bác sĩ
    public function index()
    {
        // Lấy danh sách bác sĩ từ bảng doctor
        $doctors = Doctor::all(); // Hoặc dùng DB::table('doctor')->get()

        // Trả dữ liệu bác sĩ về view 'pages.doctor'
        return view('pages.doctor', compact('doctors'));
    }

    // Hiển thị trang profile của bác sĩ
    public function showProfile($id)
    {
        $doctor = Doctor::with(['services', 'reviews.user'])->find($id);

        if (!$doctor) {
            abort(404, 'Doctor not found');
        }

        return view('pages.prodoctor', compact('doctor'));
    }
}
