<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng đồ chơi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-top">
                <!-- Nút lịch sử giao dịch -->
                <a href="{{ Auth::check() ? route('orders.history') : route('welcome') }}" class="transaction-btn">Lịch sử giao dịch</a>

                <!-- Kiểm tra trạng thái đăng nhập -->
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
                @else
                    <a href="{{ route('welcome') }}" class="login-btn">Đăng nhập</a>
                @endauth
            </div>

            <div class="header-mid">
                <!-- Logo -->
                <a href="{{ route('products.index') }}" class="logo">
                    <img src="images/logo-toys.png" alt="logo">
                </a>

                <!-- Ô tìm kiếm -->
                <form action="{{ route('products.index') }}" method="GET" class="search-form">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." value="{{ request('search') }}">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <!-- Nút Giỏ hàng -->
                <a href="{{ Auth::check() ? route('cart.index') : route('welcome') }}" class="cart-btn">
                    <i class="fa-solid fa-basket-shopping"></i> Giỏ hàng
                </a>
            </div>

            <div class="header-bottom">
                <!-- Danh mục sản phẩm -->
                <div class="category-menu">
                    <a href="{{ route('products.index') }}">Tất cả</a>
                    @foreach($categories as $category)
                        <a href="{{ route('products.index', ['category_id' => $category->id]) }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </header>

    <div class="banner-container">
        <div class="banner" id="banner">
            <img src="{{ asset('images/labubu.webp') }}" alt="Banner 1">
            <img src="{{ asset('images/banner2.jpeg') }}" alt="Banner 2">
            <img src="{{ asset('images/banner3.jpeg') }}" alt="Banner 3">
        </div>
    </div>
    <script>
        let currentIndex = 0;
        const banner = document.getElementById("banner");
        const totalSlides = document.querySelectorAll(".banner img").length;

        function showNextSlide() {
            currentIndex++;
            if (currentIndex === totalSlides) {
                currentIndex = 0;
            }
            banner.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        setInterval(showNextSlide, 3000);
    </script>

    <div class="product-list container">
        @foreach($products as $product)
        <div class="product-item">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
            <h3 class="product-name">{{ $product->name }}</h3>
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
