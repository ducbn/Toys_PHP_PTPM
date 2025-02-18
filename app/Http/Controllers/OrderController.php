<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Giỏ hàng của bạn trống.');
        }

        return view('orders.create', compact('cartItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Giỏ hàng của bạn trống.');
        }

        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        $order = Order::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('products.index')->with('success', 'Đơn hàng của bạn đã được đặt thành công!');
    }

    public function history()
    {
        // Lấy tất cả đơn hàng của người dùng hiện tại
        $orders = Order::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return view('orders.history', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('orderItems.product')->findOrFail($id);
        return view('orders.show', compact('order'));
    }

}
