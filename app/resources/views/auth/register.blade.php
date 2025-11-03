@extends('layouts.app')

@section('title', 'Đăng ký')

@section('content')
<div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-5">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header text-center bg-primary text-white rounded-top-4">
                <h3 class="mb-0">Đăng ký tài khoản</h3>
            </div>

            <div class="card-body p-4">
                {{-- Hiển thị thông báo thành công --}}
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Hiển thị lỗi --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form đăng ký --}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Họ và tên</label>
                        <input type="text" id="name" name="name" 
                               class="form-control rounded-3 @error('name') is-invalid @enderror" 
                               placeholder="Nhập họ và tên" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" id="email" name="email" 
                               class="form-control rounded-3 @error('email') is-invalid @enderror" 
                               placeholder="Nhập email của bạn" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Mật khẩu</label>
                        <input type="password" id="password" name="password" 
                               class="form-control rounded-3 @error('password') is-invalid @enderror" 
                               placeholder="Nhập mật khẩu" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label fw-semibold">Xác nhận mật khẩu</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" 
                               class="form-control rounded-3" 
                               placeholder="Nhập lại mật khẩu" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary rounded-3 fw-bold py-2">
                            Đăng ký
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            Đã có tài khoản? <strong>Đăng nhập ngay</strong>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
