<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        return view('frontend.home');
    }

    public function rooms()
    {
        // Đọc file JSON từ thư mục storage/app/data/
        $path = public_path('rooms.json');

        if (!file_exists($path)) {
            abort(404, 'Không tìm thấy file dữ liệu phòng.');
        }

        // Chuyển JSON thành mảng PHP
        $rooms = json_decode(file_get_contents($path));

        // Gửi dữ liệu sang view
        return view('frontend.rooms', compact('rooms'));
    }


    public function deals() {
        return view('frontend.deals');
    }

    public function blog() {
        return view('frontend.blog');
    }

    public function contact() {
        return view('frontend.contact');
    }
}
