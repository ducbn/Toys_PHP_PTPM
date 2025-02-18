<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng</title>
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
</head>
<body>
    <header>
        <a href="{{ route('cart.index') }}" class="back-btn">&larr; Quay lại</a>
        <h1>Thông Tin Đặt Hàng</h1>
    </header>

    <div class="container">
        <div class="order-details">
            <h2>Đơn Hàng Của Bạn</h2>
            @foreach($cartItems as $cartItem)
                <div class="order-item">
                    <img src="{{ asset('images/' . $cartItem->product->image) }}" alt="{{ $cartItem->product->name }}">
                    <div>
                        <p><strong>{{ $cartItem->product->name }}</strong></p>
                        <p>Số lượng: {{ $cartItem->quantity }}</p>
                        <p>Giá: {{ number_format($cartItem->product->price, 0, ',', '.') }} VND</p>
                    </div>
                </div>
            @endforeach
            <div class="total">Tổng cộng: {{ number_format($cartItems->sum(function($cartItem) {
                return $cartItem->product->price * $cartItem->quantity;
            }), 0, ',', '.') }} VND</div>
        </div>

        <div class="order-form">
            @if(session('error'))
                <div class="alert-error">{{ session('error') }}</div>
            @endif

            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <label for="name">Họ và Tên:</label>
                <input type="text" name="name" id="name" required placeholder="Nhập họ và tên...">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required placeholder="Nhập email...">

                <label for="phone">Số điện thoại:</label>
                <input type="text" name="phone" id="phone" required placeholder="Nhập số điện thoại...">

                <label for="address">Địa chỉ giao hàng:</label>
                <textarea name="address" id="address" required placeholder="Nhập địa chỉ..."></textarea>

                <div class="total">
                    <h3>Tổng cộng: <span>{{ number_format($cartItems->sum(function($cartItem) {
                        return $cartItem->product->price * $cartItem->quantity;
                    }), 0, ',', '.') }} VND</span></h3>
                </div>

                <button type="submit" class="order-btn">Thanh toán với PayPal</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Thương mại điện tử</p>
    </footer>
</body>
</html>
