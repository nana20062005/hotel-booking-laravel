@extends('layouts.frontend')
@section('title', 'Blog Du Lịch')
@section('content')

<link rel="stylesheet" href="{{ asset('css/blog.css') }}">

<section class="blog-hero">
    <div class="hero-content">
        <h1>📝 Blog Du Lịch</h1>
        <p>Khám phá những mẹo du lịch, điểm đến hấp dẫn và ưu đãi khách sạn mới nhất</p>
    </div>
</section>

<section class="blog-container">
    <div class="blog-grid">

        <article class="blog-card">
            <div class="blog-image">
                <img src="{{ asset('images/blog-danang.jpg') }}" alt="Đà Nẵng">
            </div>
            <div class="blog-content">
                <h2>10 Khách Sạn Đẹp Nhất Đà Nẵng 2024</h2>
                <p>Khám phá danh sách các khách sạn sang trọng, view biển tuyệt đẹp và dịch vụ đẳng cấp tại Đà Nẵng.</p>
                <a href="#" class="btn-read">Đọc thêm →</a>
            </div>
        </article>

        <article class="blog-card">
            <div class="blog-image">
                <img src="{{ asset('images/blog-phuquoc.jpg') }}" alt="Phú Quốc">
            </div>
            <div class="blog-content">
                <h2>Kinh Nghiệm Du Lịch Phú Quốc</h2>
                <p>Tất tần tật những điều bạn cần biết để có một kỳ nghỉ hoàn hảo tại đảo ngọc Phú Quốc.</p>
                <a href="#" class="btn-read">Đọc thêm →</a>
            </div>
        </article>

        <article class="blog-card">
            <div class="blog-image">
                <img src="{{ asset('images/blog-resort.jpg') }}" alt="Resort cao cấp">
            </div>
            <div class="blog-content">
                <h2>Top Resort Sang Trọng Nhất Việt Nam</h2>
                <p>Điểm danh những resort 5 sao được yêu thích nhất năm 2024 dành cho kỳ nghỉ thượng hạng.</p>
                <a href="#" class="btn-read">Đọc thêm →</a>
            </div>
        </article>

        <article class="blog-card">
            <div class="blog-image">
                <img src="{{ asset('images/blog-sapa.jpg') }}" alt="Sapa mùa đông">
            </div>
            <div class="blog-content">
                <h2>Hướng Dẫn Du Lịch Sapa Mùa Đông</h2>
                <p>Tận hưởng không khí se lạnh, săn mây và ngắm tuyết trắng tại Sapa trong mùa đông này.</p>
                <a href="#" class="btn-read">Đọc thêm →</a>
            </div>
        </article>

    </div>
</section>


@endsection
