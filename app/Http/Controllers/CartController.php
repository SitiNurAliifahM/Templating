<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);


        $product = Product::find($id);


        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }


        $quantity = $request->input('quantity', 1);


        $cart = Cart::where('user_id', Auth::id())->where('product_id', $id)->first();


        if ($cart) {
            $cart->quantity += $quantity;
            $cart->save();
        } else {

            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $id,
                'quantity' => $quantity,
            ]);
        }


        return redirect()->back()->with('success', 'Product added to cart!');
    }


    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('cart', compact('cartItems'));
    }


    public function update(Request $request, $id)
    {
        $cart = Cart::where('user_id', Auth::id())->where('id', $id)->first();

        if ($cart) {
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back()->with('success', 'Cart updated successfully!');
        }

        return redirect()->back()->with('error', 'Cart item not found!');
    }


    public function delete($id)
    {
        $cart = Cart::where('user_id', Auth::id())->where('id', $id)->first();

        if ($cart) {
            $cart->delete();
            return redirect()->back()->with('success', 'Cart item removed successfully!');
        }

        return redirect()->back()->with('error', 'Cart item not found!');
    }


    public function clear()
    {
        Cart::where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'All cart items removed successfully!');
    }

    // public function delete($id)
    // {
    //     $cart = cart::findOrFail($id);
    //     $cart->delete();
    //     // return view('cart');
    //     return redirect()->route('cart.index');
    // }

}
?>
