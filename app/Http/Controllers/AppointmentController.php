<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    // Hiển thị lịch hẹn của người dùng
    public function index()
    {
        // Lấy tất cả lịch hẹn của người dùng đã đăng nhập
        $appointments = Appointment::where('user_id', auth('web')->id())
            ->get(['id_doctor', 'date', 'time', 'note']);

        $doctorId = session('id_doctor') ?? $appointments->pluck('doctor_id')->first();

        if (!$doctorId) {
            dd('Session id_doctor không tồn tại hoặc không hợp lệ.');
        }

        $doctor = $doctorId ? Doctor::find($doctorId) : null;

        return view('pages.as', compact('appointments', 'doctor'));
    }

    public function create()
    {
        $idDoctor = session('id_doctor');

        $doctor = Doctor::find($idDoctor);

        // if (!$doctor) {
        //     dd("Doctor with ID $idDoctor not found in the database.");
        // }

        return view('pages.as', compact('doctor'));
    }

    // Lưu lịch hẹn mới
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to book an appointment.');
        }

        $idDoctor = session('id_doctor');

        if (!$idDoctor) {
            return redirect()->route('doctors.index')->with('error', 'No doctor selected.');
        }

        // Validate dữ liệu nhập vào từ người dùng (date and time)
        $validated = $request->validate([
            'selected_date' => 'required|date',
            'selected_time' => 'required|date_format:H:i',
        ]);

        // Lưu lịch hẹn vào cơ sở dữ liệu
        Appointment::create([
            'user_id' => auth('web')->id(),
            'doctor_id' => $idDoctor,
            'date' => $request->selected_date,
            'time' => $request->selected_time,
            'note' => $request->note ?? null,
        ]);

        session()->forget('id_doctor');

        // Chuyển hướng người dùng trở lại trang lịch hẹn với thông báo thành công
        return redirect()->route('as.index')->with('success', 'Appointment booked successfully!');
    }
}
