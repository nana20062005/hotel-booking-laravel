@extends('layouts.frontend')
@section('title', 'Đặt phòng')
@section('content')

<link rel="stylesheet" href="{{ asset('css/booking.css') }}">

<section class="booking-page">
    <div class="booking-container">
        <h1>Đặt Phòng: {{ $room->name }}</h1>
        <div class="room-preview" style="background-image: url('{{ asset($room->image) }}')"></div>

        <form method="POST">
            @csrf
            <label>Họ và tên</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Ngày nhận phòng</label>
            <input type="date" name="checkin" required>

            <label>Ngày trả phòng</label>
            <input type="date" name="checkout" required>

            <label>Số lượng khách</label>
            <select name="guests" required>
                <option value="1">1 người</option>
                <option value="2">2 người</option>
                <option value="3">3 người</option>
            </select>

            <button type="submit" class="btn-submit">Xác nhận đặt phòng</button>
        </form>
    </div>
</section>

@endsection
