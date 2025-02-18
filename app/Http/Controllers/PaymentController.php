<?php

namespace App\Http\Controllers;

use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Cart;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
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

        $paypal = new PayPalClient;
        $paypal->setApiCredentials(config('paypal'));
        $paypalToken = $paypal->getAccessToken();
        $paypal->setAccessToken($paypalToken);

        $response = $paypal->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $totalPrice
                    ]
                ]
            ],
            "application_context" => [
                "cancel_url" => route('payment.cancel'),
                "return_url" => route('payment.success', ['order_id' => $order->id]),
            ]
        ]);

        if (isset($response['id']) && $response['status'] == 'CREATED') {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }

        return redirect()->route('cart.index')->with('error', 'Lỗi khi khởi tạo thanh toán.');
    }

    public function success(Request $request)
    {
        $paypal = new PayPalClient;
        $paypal->setApiCredentials(config('paypal'));
        $paypalToken = $paypal->getAccessToken();
        $paypal->setAccessToken($paypalToken);

        $response = $paypal->capturePaymentOrder($request->token);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $order = Order::findOrFail($request->order_id);
            $order->update(['status' => 'paid']);

            return redirect()->route('products.index')->with('success', 'Thanh toán thành công!');
        }

        return redirect()->route('cart.index')->with('error', 'Thanh toán không thành công.');
    }

    public function cancel()
    {
        return redirect()->route('cart.index')->with('error', 'Bạn đã hủy thanh toán.');
    }
}
