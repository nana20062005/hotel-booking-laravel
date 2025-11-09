@extends('layouts.frontend')
@section('title', 'Liên hệ')

@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<section class="contact-hero">
    <div class="contact-hero-content">
        <h1>📞 Liên Hệ Với Chúng Tôi</h1>
        <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7 — Hãy gửi thông tin hoặc liên hệ trực tiếp</p>
    </div>
</section>

<section class="contact-container">
    <div class="contact-info">
        <h2>Thông Tin Liên Hệ</h2>
        <ul>
            <li>🏨 <strong>HotelBook Việt Nam</strong></li>
            <li>📍 Tôn Đức Thắng, Liên Chiểu, Đà Nẵng</li>
            <li>📞 Hotline: <a href="#">1900-xxxx</a></li>
            <li>✉️ Email: <a href="#">support@hotelbook.vn</a></li>
            <li>🕓 Thời gian làm việc: 8:00 - 22:00 mỗi ngày</li>
        </ul>

        <div class="social-links">
            <a href="#" class="social-icon">📘</a>
            <a href="#" class="social-icon">📷</a>
            <a href="#" class="social-icon">🐦</a>
        </div>
    </div>

    <div class="contact-form">
        <h2>Gửi Tin Nhắn Cho Chúng Tôi</h2>
        <form>
            <div class="form-group">
                <label>Họ và tên</label>
                <input type="text" placeholder="Nhập họ tên của bạn" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Nhập địa chỉ email" required>
            </div>

            <div class="form-group">
                <label>Chủ đề</label>
                <input type="text" placeholder="Nhập tiêu đề liên hệ" required>
            </div>

            <div class="form-group">
                <label>Nội dung</label>
                <textarea rows="5" placeholder="Nhập nội dung tin nhắn..." required></textarea>
            </div>

            <button type="submit" class="btn-submit">Gửi Liên Hệ</button>
        </form>
    </div>
</section>

<section class="contact-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1525.704375319835!2d108.15944468754898!3d16.061684752003135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421924682e8689%3A0x48eb0bdbeec05215!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBTxrAgUGjhuqFtIC0gxJDhuqFpIGjhu41jIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1762654569046!5m2!1svi!2s"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>


@endsection
