<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    // Hiển thị lịch hẹn của người dùng
    public function index()
    {
        // Lấy tất cả lịch hẹn của người dùng đã đăng nhập
        $appointments = Appointment::where('user_id', auth('web')->id())
            ->get(['date', 'time', 'note']); // Include 'note' if it exists
        return view('pages.as', compact('appointments'));
    }

    // Lưu lịch hẹn mới
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to book an appointment.');
        }

        // Validate dữ liệu nhập vào từ người dùng (date and time)
        $validated = $request->validate([
            'selected_date' => 'required|date', // Validate the selected date
            'selected_time' => 'required|date_format:H:i', // Validate the selected time
        ]);

        // Lưu lịch hẹn vào cơ sở dữ liệu
        Appointment::create([
            'user_id' => auth('web')->id(),  // Lưu ID người dùng đã đăng nhập
            'date' => $request->selected_date,  // Ngày lịch hẹn
            'time' => $request->selected_time,  // Giờ lịch hẹn
            'note' => $request->note ?? null,  // Optional note, if available
        ]);

        // Chuyển hướng người dùng trở lại trang lịch hẹn với thông báo thành công
        return redirect()->route('as.index')->with('success', 'Appointment booked successfully!');
    }
}
