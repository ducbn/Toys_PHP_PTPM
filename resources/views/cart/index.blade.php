<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-top">
                <!-- Nút lịch sử giao dịch bên phải -->
                <a href="{{ route('orders.history') }}" class="transaction-btn">Lịch sử giao dịch</a>

                <!-- Nút hiển thị tên người dùng -->
                @auth
                    <div class="user-menu-container">
                        <button class="user-btn">
                            {{ Auth::user()->name }} ▼
                        </button>
                        <div class="user-menu">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Đăng xuất
                            </a>
                        </div>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth

            </div>
            <div class="header-mid">
                <!-- logo image -->
                <a href="{{ route('products.index') }}" class="logo">
                    <img src="images/logo-toys.png" alt="logo">
                </a>

                <!-- Ô tìm kiếm -->
                <form action="{{ route('products.index') }}" method="GET" class="search-form">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." value="{{ request('search') }}">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <!-- Nút Giỏ hàng -->
                <a href="{{ route('cart.index') }}" class="cart-btn"><i class="fa-solid fa-basket-shopping"></i> Giỏ
                    hàng</a>

            </div>
        </div>
    </header>

    <div class="cart">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @if(!empty($cartItems) && count($cartItems) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Tổng</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $cartItem)
                        <tr>
                            <td>{{ $cartItem->product->name }}</td>
                            <td>{{ number_format($cartItem->product->price, 0, ',', '.') }} VND</td>
                            <td>
                                <form action="{{ route('cart.update', $cartItem->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" name="quantity" value="{{ $cartItem->quantity }}" min="1">
                                    <button type="submit">Cập nhật</button>
                                </form>
                            </td>
                            <td>{{ number_format($cartItem->product->price * $cartItem->quantity, 0, ',', '.') }} VND</td>
                            <td>
                                <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="cart-total">
                <h3>Tổng cộng: {{ number_format($cartItems->sum(function ($cartItem) {
                    return $cartItem->product->price * $cartItem->quantity;
                }), 0, ',', '.') }} VND</h3>
            </div>
            @if(!empty($cartItems) && count($cartItems) > 0)
                <div class="cart-actions">
                    <a href="{{ route('orders.create') }}" class="order-btn">Đặt hàng</a>
                </div>
            @endif



        @else
            <p>Giỏ hàng của bạn hiện tại trống.</p>
        @endif
    </div>

    <footer>
        <p>© 2025 Thương mại điện tử</p>
    </footer>
</body>

</html>
