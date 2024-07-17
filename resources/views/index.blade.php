@extends('layouts.front')
@section('content')
@php
    $product = App\Models\Product::orderBy('id', 'asc')->get();
@endphp
    <!-- slider-area-start -->
    <section class="slider-area pb-25">
        <div class="container">
            <div class="row justify-content-xl-end">
                <div class="col-xl-9 col-xxl-7 col-lg-9">
                    <div class="tp-slider-area p-relative">
                        <div class="swiper-container slider-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tp-slide-item">
                                        <div class="tp-slide-item__content">
                                            <a class="tp-slide-item__slide-btn tp-btn" href="{{ url('shop') }}">Shop Now
                                                <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="tp-slide-item__img">
                                            <img src="https://www.cleanipedia.com/images/5h1w0177knh8/5cfNu164Lac79Rt7tqfVjD/f2ee91f083f9f4bad45184121dd539bd/MTAuX0NsZWFuaXBlZGlhX01hcmNoXzIwMjJfSGVhZGVyLmpwZw/1200w/kumpulan-barang-elektronik-yang-berantakan-termasuk-laptop%2C-kamera%2C-jam%2C-dan-berbagai-jenis-kabel..jpg"
                                                alt="" width="100%" height="30%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-3">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="tpslider-banner tp-slider-sm-banner mb-30">
                                <a href="shop-details.html">
                                    <div class="tpslider-banner__img">
                                        <img src="https://ds393qgzrxwzn.cloudfront.net/resize/m600x500/cat1/img/images/0/ycDLbiGfN9.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="tpslider-banner">
                                <a href="shop-details.html">
                                    <div class="tpslider-banner__img">
                                        <img src="front/assets/img/hem.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- category-area-start -->
    <section class="category-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tpsection mb-40">
                        <h4 class="tpsection__title"><span> Categories</span></h4>
                    </div>
                </div>
            </div>
            <div class="custom-row category-border pb-45 justify-content-between">
                <div class="tpcategory mb-40">
                    <div class="tpcategory__icon p-relative">
                        <img src="https://dibimbing-cdn.sgp1.cdn.digitaloceanspaces.com/1693586160053-10-Rekomendasi-Laptop-Terbaik-untuk-Data-Analyst-2023.webp"
                            alt="" width="70" height="50" style="border-radius: 10%">
                    </div>
                    <div class="tpcategory__content">
                        <h5 class="tpcategory__title"><a href="{{ url('shop') }}">Laptop</a></h5>
                    </div>
                </div>
                <div class="tpcategory mb-40">
                    <div class="tpcategory__icon">
                        <img src="https://www.teknovidia.com/wp-content/uploads/2023/01/Istilah-Istilah-Dalam-Dunia-Handphone.jpg.webp"
                            alt="" width="80" height="60" style="border-radius: 10%">
                    </div>
                    <div class="tpcategory__content">
                        <h5 class="tpcategory__title"><a href="{{ url('shop') }}">Handphone</a></h5>
                    </div>
                </div>
                <div class="tpcategory mb-40">
                    <div class="tpcategory__icon">
                        <img src="https://www.softcom.co.id/wp-content/uploads/2020/02/2-72.jpg" alt=""
                            width="70" height="60" style="border-radius: 10%">
                    </div>
                    <div class="tpcategory__content">
                        <h5 class="tpcategory__title"><a href="{{ url('shop') }}">Computer</a></h5>
                    </div>
                </div>
                <div class="tpcategory mb-40">
                    <div class="tpcategory__icon">
                        <img src="{{asset('front/assets/img/mouse.jpeg')}}" alt="" width="80"
                            height="60" style="border-radius: 10%">
                    </div>
                    <div class="tpcategory__content">
                        <h5 class="tpcategory__title"><a href="{{ url('shop') }}">Mouse</a></h5>
                    </div>
                </div>
                <div class="tpcategory mb-40">
                    <div class="tpcategory__icon">
                        <img src="{{asset('front/assets/img/keyboard.webp')}}" alt="" width="70" height="60" style="border-radius: 10%">
                    </div>
                    <div class="tpcategory__content">
                        <h5 class="tpcategory__title"><a href="{{url('shop')}}">Keyboard</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category-area-end -->

    <!-- product-area-start -->
    <section class="product-area pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="tpsection mb-40">
                        <h4 class="tpsection__title"><span><b>Products</b></span></h4>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                        @foreach ($product as $item)
                            <div class="col">
                                <div class="tpproduct pb-15 mb-30 pe-5">
                                    <div class="tpproduct__thumb p-relative">
                                        <a href="{{ url('shop_details') }}">
                                            <img src="{{ asset('/images/product/' . $item->image) }}" alt="product-thumb"
                                                style="max-height: 150px; max-widht:150px;">
                                        </a>
                                        <div class="tpproduct__thumb-action">
                                            {{-- <a class="comphare" href="#"><i class="fal fa-exchange"></i></a> --}}
                                            <a class="quckview" href="{{ url('/shop_details') . '/' . $item->id }}"><i
                                                    class="fal fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="tpproduct__content">
                                        <h3 class="tpproduct__title"><a href="shop-details.html">{{ $item->name }}</a>
                                        </h3>
                                        {{-- <div class="tpproduct__priceinfo p-relative">
                                            <div class="tpproduct__priceinfo-list">
                                                <span>$31.00</span>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-area-end -->
@endsection
