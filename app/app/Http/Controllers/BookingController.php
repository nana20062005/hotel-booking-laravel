<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show($id)
    {
        $path = public_path('rooms.json');

        if (!file_exists($path)) {
            abort(404, 'Không tìm thấy dữ liệu phòng.');
        }

        // Đọc JSON và chuyển thành mảng
        $rooms = json_decode(file_get_contents($path));

        // Tìm phòng theo id
        $room = collect($rooms)->firstWhere('id', (int)$id);

        if (!$room) {
            abort(404, 'Phòng không tồn tại.');
        }

        return view('frontend.booking', compact('room'));
    }
}
