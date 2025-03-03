<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                <a href="{{ route('products.index') }}" class="logo1">
                    <img src="images/logo-toys.png" alt="">
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

    <div class="product-detail container">
        <div class="product-image">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
        </div>
        <div class="product-info">
            <h2>{{ $product->name }}</h2>
            <p class="price">{{ number_format($product->price, 0, ',', '.') }} VND</p>
            <p class="description">{{ $product->description }}</p>

            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <label for="quantity">Số lượng:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <br>
                <button type="submit" class="btn">Thêm vào giỏ hàng</button>
            </form>
        </div>
    </div>

    <footer>
        <p>© 2025 Thương mại điện tử</p>
    </footer>
</body>

</html>
