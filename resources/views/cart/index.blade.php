<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
</head>

<body>
    <header>
        <a href="{{ route('products.index') }}" class="back-btn">← Quay lại</a>
        <h1>Giỏ Hàng</h1>
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
