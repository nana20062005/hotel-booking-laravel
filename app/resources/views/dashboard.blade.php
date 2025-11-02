<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Chào mừng bạn đến trang Dashboard!</h2>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <p>Bạn đã đăng nhập thành công 🎉</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Đăng xuất</button>
    </form>
</body>
</html>
