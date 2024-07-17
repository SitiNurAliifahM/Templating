@extends('layouts.front')
@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="#">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-7 col-lg-12 col-md-12 col-12">
            <div class="tp-breadcrumb">
               <div class="tp-breadcrumb__link mb-10">
                  <span class="breadcrumb-item-active"><a href="{{url('/')}}">Home</a></span>
                  <span>Shop Details</span>
               </div>
               <h2 class="tp-breadcrumb__title">Shop Details</h2>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- breadcrumb-area-end -->

<!-- product-area-start -->
<section class="product-area pt-80 pb-25">
   <div class="container">
      <div class="row">
         <div class="col-lg-5 col-md-12">
            <div class="tpproduct-details__nab pr-50 mb-40">
               <div class="d-flex align-items-start">
                  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                     <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <img src="{{ asset('/images/product/' . $detail->image) }}" alt="">
                     </button>
                     <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <img src="{{ asset('/images/product/' . $detail->image) }}" alt="">
                     </button>
                     <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <img src="{{ asset('/images/product/' . $detail->image) }}" alt="">
                     </button>
                  </div>
                  <div class="tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <img src="{{ asset('/images/product/' . $detail->image) }}" alt="">
                     </div>
                     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <img src="{{ asset('/images/product/' . $detail->image) }}" alt="">
                     </div>
                     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <img src="{{ asset('/images/product/' . $detail->image) }}" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-5 col-md-7">
            <div class="tpproduct-details__content">
               <div class="tpproduct-details__tag-area d-flex align-items-center mb-5">
                  <span class="tpproduct-details__tag">Dress</span>
                  <div class="tpproduct-details__rating">
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                     <a href="#"><i class="fas fa-star"></i></a>
                  </div>
                  <a class="tpproduct-details__reviewers">10 Reviews</a>
               </div>
               <div class="tpproduct-details__title-area d-flex align-items-center flex-wrap mb-5">
                  <h3 class="tpproduct-details__title">{{$detail->name}}</h3>
                  <span class="tpproduct-details__stock">In Stock</span>
               </div>
               <div class="tpproduct-details__price mb-30">
                  <p>Rp. {{$detail->price}}</p>
               </div>
               <div class="tpproduct-details__pera">
                  <p>{{$detail->desc}}</p>
               </div>
               <div class="tpproduct-details__count d-flex align-items-center flex-wrap mb-25">
                  <div class="tpproduct-details__quantity">
                     <span class="cart-minus"><i class="far fa-minus"></i></span>
                     <input class="tp-cart-input" type="text" value="1">
                     <span class="cart-plus"><i class="far fa-plus"></i></span>
                  </div>
                  <div class="tpproduct-details__cart ml-20">
                     <form action="{{ route('cart.add', $detail->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="quantity" value="1" class="quantity-input">
                        <button class="btn btn-fill-out btn-addtocart" type="submit"><i class="icon-basket-loaded"></i> Add to cart</button>
                     </form>
                  </div>
                  <div class="tpproduct-details__cart ml-20 mt-10">
                     <a href="{{url('checkout')}}" class="btn btn-danger">Proceed to Checkout</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- product-area-end -->

<!-- product-details-area-start -->
{{-- <div class="product-details-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="tpproduct-details__navtab mb-60">
               <div class="tpproduct-details__nav mb-30">
                  <ul class="nav nav-tabs pro-details-nav-btn" id="myTabs" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-links active" id="home-tab-1" data-bs-toggle="tab" data-bs-target="#home-1" type="button" role="tab" aria-controls="home-1" aria-selected="true">Description</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-links" id="information-tab" data-bs-toggle="tab" data-bs-target="#additional-information" type="button" role="tab" aria-controls="additional-information" aria-selected="false">Additional information</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-links" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (2)</button>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> --}}
<!-- product-details-area-end -->

<!-- related-product-area-start -->
{{-- <div class="related-product-area pt-65 pb-50 related-product-border">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-6">
            <div class="tpsection mb-40">
               <h4 class="tpsection__title">Related Products</h4>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="tprelated__arrow d-flex align-items-center justify-content-end mb-40">
               <div class="tprelated__prv"><i class="far fa-long-arrow-left"></i></div>
               <div class="tprelated__nxt"><i class="far fa-long-arrow-right"></i></div>
            </div>
         </div>
      </div>
      <div class="swiper-container related-product-active">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="tpproduct pb-15 mb-30">
                  <div class="tpproduct__thumb p-relative">
                     <a href="shop-details-2.html">
                        <img src="front/assets/img/product/home-one/product-1.jpg" alt="product-thumb">
                        <img class="product-thumb-secondary" src="front/assets/img/product/home-one/product-2.jpg" alt="">
                     </a>
                     <div class="tpproduct__thumb-action">
                        <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                        <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                        <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                     </div>
                  </div>
                  <div class="tpproduct__content">
                     <h3 class="tpproduct__title"><a href="shop-details.html">Miko Shoulder</a></h3>
                     <div class="tpproduct__rating mb-5">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <span class="tpproduct__price">Rp 750.000</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpproduct pb-15 mb-30">
                  <div class="tpproduct__thumb p-relative">
                     <a href="shop-details-2.html">
                        <img src="front/assets/img/product/home-one/product-2.jpg" alt="product-thumb">
                        <img class="product-thumb-secondary" src="front/assets/img/product/home-one/product-3.jpg" alt="">
                     </a>
                     <div class="tpproduct__thumb-action">
                        <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                        <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                        <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                     </div>
                  </div>
                  <div class="tpproduct__content">
                     <h3 class="tpproduct__title"><a href="shop-details.html">Sweat Hoodie</a></h3>
                     <div class="tpproduct__rating mb-5">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <span class="tpproduct__price">Rp 1.250.000</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpproduct pb-15 mb-30">
                  <div class="tpproduct__thumb p-relative">
                     <a href="shop-details-2.html">
                        <img src="front/assets/img/product/home-one/product-3.jpg" alt="product-thumb">
                        <img class="product-thumb-secondary" src="front/assets/img/product/home-one/product-4.jpg" alt="">
                     </a>
                     <div class="tpproduct__thumb-action">
                        <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                        <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                        <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                     </div>
                  </div>
                  <div class="tpproduct__content">
                     <h3 class="tpproduct__title"><a href="shop-details.html">Wide Leg Jeans</a></h3>
                     <div class="tpproduct__rating mb-5">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <span class="tpproduct__price">Rp 1.450.000</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpproduct pb-15 mb-30">
                  <div class="tpproduct__thumb p-relative">
                     <a href="shop-details-2.html">
                        <img src="front/assets/img/product/home-one/product-4.jpg" alt="product-thumb">
                        <img class="product-thumb-secondary" src="front/assets/img/product/home-one/product-5.jpg" alt="">
                     </a>
                     <div class="tpproduct__thumb-action">
                        <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                        <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                        <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                     </div>
                  </div>
                  <div class="tpproduct__content">
                     <h3 class="tpproduct__title"><a href="shop-details.html">Roll-Up Jeans</a></h3>
                     <div class="tpproduct__rating mb-5">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <span class="tpproduct__price">Rp 1.350.000</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpproduct pb-15 mb-30">
                  <div class="tpproduct__thumb p-relative">
                     <a href="shop-details-2.html">
                        <img src="front/assets/img/product/home-one/product-5.jpg" alt="product-thumb">
                        <img class="product-thumb-secondary" src="front/assets/img/product/home-one/product-6.jpg" alt="">
                     </a>
                     <div class="tpproduct__thumb-action">
                        <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                        <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                        <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                     </div>
                  </div>
                  <div class="tpproduct__content">
                     <h3 class="tpproduct__title"><a href="shop-details.html">Black Ruffled</a></h3>
                     <div class="tpproduct__rating mb-5">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                     </div>
                     <span class="tpproduct__price">Rp 2.050.000</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> --}}
<!-- related-product-area-end -->

@endsection
