@extends('layouts.front')
@section('content')

<!-- breadcrumb-area -->
      <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="#">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <div class="tp-breadcrumb__link mb-10">
                        <span class="breadcrumb-item-active"><a href="index.html">Home</a></span>
                        <span>Shop</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Shop Grid</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- product-filter-area-start -->
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
      <!-- product-filter-area-end -->

@endsection
