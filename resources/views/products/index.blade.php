<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-top">
                <!-- Ô tìm kiếm nằm bên trái -->
                <form action="{{ route('products.index') }}" method="GET" class="search-form">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." value="{{ request('search') }}">
                    <button type="submit">Tìm</button>
                </form>

                <!-- Tiêu đề và danh mục ở giữa -->
                <div class="header-center">
                    <h1 class="header-title">Danh Sách Sản Phẩm</h1>
                    <form action="{{ route('products.index') }}" method="GET" class="category-filter">
                        <select name="category_id" onchange="this.form.submit()" class="category-select">
                            <option value="">Tất cả danh mục</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <!-- Nút lịch sử giao dịch bên phải -->
                <a href="{{ route('orders.history') }}" class="transaction-btn">Lịch sử giao dịch</a>
            </div>
        </div>

        <!-- Nút Giỏ hàng -->
        <a href="{{ route('cart.index') }}" class="cart-btn">Giỏ hàng</a>

        <!-- Nút hiển thị tên người dùng -->
        @auth
        <button class="user-btn">
            {{ Auth::user()->name }}
        </button>
        <div class="user-menu">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
    </header>

    <div class="product-list container">
        @foreach($products as $product)
        <div class="product-item">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
            <h3 class="product-name">{{ $product->name }}</h3>
            <p class="product-description">{{ $product->description }}</p>
            <p class="product-price">{{ number_format($product->price, 0, ',', '.') }} VND</p>
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-detail">Xem chi tiết</a>
        </div>
        @endforeach
    </div>

    <footer class="footer">
        <div class="container">
            <p>© 2025 Thương mại điện tử</p>
        </div>
    </footer>
</body>
</html>
