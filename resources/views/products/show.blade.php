<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>

<body>
    <header>
        <h1>Chi Tiết Sản Phẩm</h1>
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
