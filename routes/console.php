<?php 

// use Illuminate\Foundation\Inspiring;
// use Illuminate\Support\Facades\Artisan;
use App\Mail\TaskErrorMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Schedule as TaskScheduler;
use App\Events\TaskUpdated;

// Lịch trình để cập nhật bảng `tasks`
Schedule::call(function () {
    try {
        // Cập nhật `updated_at` cho tất cả các bản ghi
        $updated = DB::table('tasks')->update(['updated_at' => now()]);

        // Phát Event nếu có bản ghi được cập nhật
        if ($updated > 0) {
            event(new TaskUpdated(now()->toDateTimeString()));
        }
    } catch (\Exception $e) {
        // Ghi log và gửi email nếu có lỗi
        Log::error('Scheduler error: ' . $e->getMessage());
        Mail::to('pthao181125@gmail.com')->send(new TaskErrorMail($e->getMessage()));
    }
})->everyMinute();