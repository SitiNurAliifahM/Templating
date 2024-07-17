<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $product = Product::take(4)->get();
        return view('index', compact('product'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        $product = Product::all();
        return view('shop', compact('product'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function track()
    {
        return view('track');
    }

    public function shop_details($id)
    {
        $detail = Product::findOrFail($id);
        return view('shop_details', compact('detail'));
    }

    public function about()
    {
        return view('about');
    }
}
