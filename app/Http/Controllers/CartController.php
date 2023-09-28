<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->id())->get();
        $subTotal = $cartItems->sum('amount');
        $shipping = 0;
        $total = $subTotal + $shipping;
        return view('cart')->with(['cartItems' => $cartItems, 'subTotal' => $subTotal, 'shipping' => $shipping, 'total' => $total]);
    }

    public function store(Request $request, Product $product)
    {
        $cart = Cart::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->first();
        if ($cart) {
            $cart->increment('quantity');
            $cart->amount = $cart->quantity * $cart->product->discountPrice;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $product->id,
                'quantity' => 1,
                'amount' => $product->discountPrice
            ]);
        }
        Toast::success('Product added to cart')->centerBottom();
        return redirect()->back();
    }

    public function update(Product $product, Request $request){
        $cart = Cart::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->first();
        if ($cart) {
            $cart->quantity = $request->quantity;
            $cart->amount = $cart->quantity * $cart->product->discountPrice;
            $cart->save();
        }
        Toast::success('Cart updated')->centerBottom();
        return redirect()->back();
    }

    public function checkout(){
        $cartItems = Cart::where('user_id', auth()->id())->get();
        $subTotal = $cartItems->sum('amount');
        $shipping = 0;
        $total = $subTotal + $shipping;
        return view('checkout')->with(['cartItems' => $cartItems, 'subTotal' => $subTotal, 'shipping' => $shipping, 'total' => $total]);
    }
}
