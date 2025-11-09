@extends('layouts.frontend')
@section('title', 'Trang chủ')
@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Khám Phá Trải Nghiệm Lưu Trú<br>Tuyệt Vời</h1>
        <p class="hero-subtitle">Tìm kiếm và đặt phòng khách sạn tốt nhất với giá ưu đãi nhất</p>

        <form class="booking-form">
            <div class="form-group">
                <label>Địa điểm</label>
                <input type="text" placeholder="Bạn muốn đến đâu?">
            </div>

            <div class="form-group">
                <label>Ngày nhận phòng</label>
                <input type="date">
            </div>

            <div class="form-group">
                <label>Ngày trả phòng</label>
                <input type="date">
            </div>

            <div class="form-group">
                <label>Số khách</label>
                <select>
                    <option>1 người</option>
                    <option>2 người</option>
                    <option>3 người</option>
                </select>
            </div>

            <button type="submit" class="btn-search">Tìm kiếm</button>
        </form>
    </div>
</section>

<!-- Popular Destinations -->
<section class="destinations">
    <div class="container">
        <h2 class="section-title">🌏 Điểm Đến Phổ Biến</h2>
        <div class="destinations-grid">
            <div class="destination-card">
                <img src="{{ asset('images/hanoi.jpg') }}" alt="HN">
                <span>Hà Nội</span>
            </div>

            <div class="destination-card">
                <img src="{{ asset('images/hcm.jpg') }}" alt="HCM">
                <span>TP.HCM</span>
            </div>

            <div class="destination-card">
                <img src="{{ asset('images/danang.jpg') }}" alt="DN">
                <span>Đà Nẵng</span>
            </div>

            <div class="destination-card">
                <img src="{{ asset('images/nhatrang.jpg') }}" alt="NT">
                <span>Nha Trang</span>
            </div>
        </div>
    </div>
</section>

<!-- Promotions -->
<section class="promotions">
    <div class="container">
        <h2 class="section-title">🎁 Khuyến Mãi Đặc Biệt</h2>
        <div class="promo-grid">
            <div class="promo-card">
                <h3>Giảm 30%</h3>
                <p>Đặt phòng sớm - Giảm ngay 30% cho kỳ nghỉ của bạn</p>
                <div class="promo-code">EARLY30</div>
                <button class="btn-apply">Áp dụng ngay</button>
            </div>

            <div class="promo-card" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                <h3>Tích Điểm x2</h3>
                <p>Nhận điểm thưởng gấp đôi cho mọi đặt phòng trong tháng này</p>
                <div class="promo-code">POINT2X</div>
                <button class="btn-apply">Tham gia</button>
            </div>
        </div>
    </div>
</section>

@endsection
