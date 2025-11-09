@extends('layouts.frontend')
@section('title', 'Danh sách phòng')
@section('content')

<link rel="stylesheet" href="{{ asset('css/rooms.css') }}">

<section class="rooms-hero">
    <div class="hero-content">
        <h1>🏨 Danh Sách Phòng</h1>
        <p>Chọn phòng nghỉ phù hợp cho kỳ nghỉ hoặc chuyến công tác của bạn</p>
    </div>
</section>

</section>

{{-- 🔍 Phần bộ lọc / tìm kiếm (chỉ giao diện, chưa có xử lý logic) --}}
<section class="filter-section">
    <div class="filter-container">
        <form class="filter-form">
            <input type="text" name="keyword" placeholder="🔍 Tìm theo tên phòng...">

            <select name="type">
                <option value="">-- Loại phòng --</option>
                <option value="standard">Standard</option>
                <option value="deluxe">Deluxe</option>
                <option value="suite">Suite</option>
            </select>

            <select name="price_range">
                <option value="">-- Khoảng giá --</option>
                <option value="1">Dưới 1.000.000đ</option>
                <option value="2">1.000.000đ - 2.000.000đ</option>
                <option value="3">Trên 2.000.000đ</option>
            </select>

            <button type="button" class="btn-filter">Tìm kiếm</button>
        </form>
    </div>
</section>

<section class="rooms-container">
    <div class="rooms-grid">

        @foreach ($rooms as $room)
        <div class="room-card">
            <div class="room-image" style="background-image: url('{{ $room->image }}');"></div>
            <div class="room-info">
                <h2>{{ $room->name }}</h2>
                <div class="room-rating">⭐ {{ $room->rating }}</div>
                <ul class="room-features">
                    @foreach ($room->features as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
                <div class="room-price">{{ $room->price }}</div>
                <a href="{{ route('booking', ['id' => $room->id]) }}" class="btn-book">Đặt ngay</a>
            </div>
        </div>
        @endforeach

    </div>
</section>

@endsection
