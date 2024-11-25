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
        $doctors = Doctor::all();

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

    // Lưu id_doctor vào session
    public function bookNow($idDoctor)
    {
        $doctor = Doctor::find($idDoctor);

        session(['id_doctor' => $idDoctor]);
        echo $idDoctor;
        if (session('id_doctor')) {
            dd("Session id_doctor has been set to: " . session('id_doctor'));
        } else {
            dd("Failed to set session id_doctor.");
        }

        return redirect()->route('as.index');
    }
}
