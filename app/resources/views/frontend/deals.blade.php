@extends('layouts.frontend')
@section('title', 'Khuyến mãi')

@section('content')
<link rel="stylesheet" href="{{ asset('css/deals.css') }}">

<!-- Page Header -->
<div class="page-header">
    <h1>🎁 Ưu Đãi & Khuyến Mãi</h1>
    <p>Tiết kiệm tới 50% cho kỳ nghỉ của bạn</p>
</div>

<div class="container">
    <!-- Categories -->
    <div class="promo-categories">
        <button class="category-btn active">Tất cả</button>
        <button class="category-btn">Ưu đãi Flash</button>
        <button class="category-btn">Đặt sớm</button>
        <button class="category-btn">Cuối tuần</button>
        <button class="category-btn">Dài ngày</button>
        <button class="category-btn">Thành viên</button>
    </div>

    <!-- Flash Sale -->
    <div class="flash-sale">
        <h2>⚡ FLASH SALE 24H</h2>
        <p>Giảm giá sốc chỉ trong hôm nay!</p>
        <div class="countdown">
            <div class="countdown-item">
                <span class="countdown-number">12</span>
                <span class="countdown-label">Giờ</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number">36</span>
                <span class="countdown-label">Phút</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number">45</span>
                <span class="countdown-label">Giây</span>
            </div>
        </div>
        <button class="btn-use-now" style="background: white; color: #FF6B35;">Xem ngay</button>
    </div>

    <!-- Featured Promotions -->
    <section class="featured-promos">
        <h2 class="section-title">🔥 Ưu Đãi Nổi Bật</h2>
        <div class="featured-grid">
            <!-- Card 1 -->
            <div class="featured-card">
                <div>
                    <span class="promo-badge">ƯU ĐÃI ĐẶC BIỆT</span>
                    <h3>Giảm 40% Đặt Sớm</h3>
                    <p>Đặt phòng trước 30 ngày và nhận ngay ưu đãi giảm giá 40% cho mọi khách sạn trong hệ thống.</p>
                    <div class="promo-code-box">
                        <div class="promo-code-label">Mã khuyến mãi:</div>
                        <div class="promo-code">
                            <span>EARLY40</span>
                            <button class="copy-btn">📋 Sao chép</button>
                        </div>
                    </div>
                </div>
                <button class="btn-use-now">Sử dụng ngay</button>
            </div>

            <!-- Card 2 -->
            <div class="featured-card orange">
                <div>
                    <span class="promo-badge">CUỐI TUẦN</span>
                    <h3>Weekend Deal 30%</h3>
                    <p>Nghỉ dưỡng cuối tuần với giá ưu đãi. Áp dụng cho tất cả khách sạn từ thứ 6 đến chủ nhật.</p>
                    <div class="promo-code-box">
                        <div class="promo-code-label">Mã khuyến mãi:</div>
                        <div class="promo-code">
                            <span>WEEKEND30</span>
                            <button class="copy-btn">📋 Sao chép</button>
                        </div>
                    </div>
                </div>
                <button class="btn-use-now" style="color: #FF6B35;">Sử dụng ngay</button>
            </div>
        </div>
    </section>
</div>
@endsection
