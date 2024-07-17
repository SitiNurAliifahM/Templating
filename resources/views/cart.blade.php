@extends('layouts.front')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="#">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                    <div class="tp-breadcrumb">
                        <div class="tp-breadcrumb__link mb-10">
                            <span class="breadcrumb-item-active"><a href="{{ url('/') }}">Home</a></span>
                            <span>Cart</span>
                        </div>
                        <h2 class="tp-breadcrumb__title">Product Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- cart area -->
    <section class="cart-area pt-80 pb-80 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $data)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img
                                                        src="front/assets/img/product/home-three/product-60.jpg"
                                                        alt="">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">{{ $data->product->name }}</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">{{ $data->product->price }}</span>
                                            </td>
                                            <td class="product-quantity">
                                                <span class="cart-minus">-</span>
                                                <input class="cart-input" type="text" value="{{ $data->quantity }}" />
                                                <span class="cart-plus">+</span>
                                            </td>
                                            <td class="product-subtotal">
                                                <span
                                                    class="amount">{{ $total = $data->product->price * $data->quantity }}</span>
                                            </td>
                                            <td>
                                                <form action="{{ route('cart.delete', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Clear Cart</button>
                            </form>
                        </div>
                        {{-- <div class="row">
                       <div class="col-12">
                             <div class="coupon-all">
                                <div class="coupon">
                                   <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                         placeholder="Coupon code" type="text">
                                   <button class="tp-btn tp-color-btn banner-animation" name="apply_coupon" type="submit">Apply
                                         Coupon</button>
                                </div>
                                <div class="coupon2">
                                   <button class="tp-btn tp-color-btn banner-animation" name="update_cart" type="submit">Update cart</button>
                                </div>
                             </div>
                       </div>
                    </div> --}}
                        <div class="row justify-content-end">
                            <div class="col-md-5 ">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul class="mb-20">
                                        <li>Subtotal <span>-</span></li>
                                    </ul>
                                    <a href="{{ url('checkout') }}" class="tp-btn tp-color-btn banner-animation">Proceed to
                                        Checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- cart area end-->
@endsection
