<link rel="stylesheet" href="{{ asset('css/header.css')}}">

<header>
    <nav>
        <div>
            <a href="{{route('home')}}">👑 Hotel Booking</a>
        </div>

        <div>
            <a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Trang chủ</a>
            <a href="{{route('rooms')}}" class="{{ request()->routeIs('rooms') ? 'active' : '' }}">Phòng</a>
            <a href="{{route('deals')}}" class="{{ request()->routeIs('deals') ? 'active' : '' }}">Khuyến mãi</a>
            <a href="{{route('blog')}}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
            <a href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Liên hệ</a>
        </div>

        <div>
            <a href="{{route('login')}}">Đăng nhập</a>
        </div>
    </nav>
</header>