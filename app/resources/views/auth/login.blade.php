@extends('layouts.app')

@section('title', 'Đăng nhập')

@section('content')
<div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-5">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header text-center bg-primary text-white rounded-top-4">
                <h3 class="mb-0">Đăng nhập tài khoản</h3>
            </div>

            <div class="card-body p-4">
                {{-- Thông báo thành công --}}
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Thông báo lỗi --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form đăng nhập --}}
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
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

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary rounded-3 fw-bold py-2">
                            Đăng nhập
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}" class="text-decoration-none">
                            Chưa có tài khoản? <strong>Đăng ký ngay</strong>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
