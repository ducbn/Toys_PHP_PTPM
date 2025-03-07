<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index() {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('cart.index', compact('cartItems'));
    }

    public function add(Request $request, Product $product) {
        $quantity = $request->input('quantity', 1); // Lấy số lượng từ form, mặc định là 1
    
        $cartItem = Cart::where('user_id', Auth::id())
                        ->where('product_id', $product->id)
                        ->first();
    
        if ($cartItem) {
            $cartItem->increment('quantity', $quantity);
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'quantity' => $quantity, // Gán số lượng lấy từ request
            ]);
        }
    
        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
    

    public function update(Request $request, $id) {
        Cart::where('id', $id)->update([
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('cart.index')->with('success', 'Giỏ hàng đã được cập nhật!');
    }

    public function remove($id) {
        Cart::where('id', $id)->delete();
        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã bị xóa!');
    }
    
}
