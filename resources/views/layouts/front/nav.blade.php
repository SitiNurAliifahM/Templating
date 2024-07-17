<!-- header-area-start -->
<header>
    <div class="logo-area mt-30 d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('front/assets/img/logo/logodimension.png') }}"
                                alt="" width="50%"></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="header-meta-info d-flex align-items-center justify-content-between">
                        <div class="header-search-bar">
                            <form action="#">
                                <div class="search-info p-relative">
                                    <button class="header-search-icon"><i class="fal fa-search"></i></button>
                                    <input type="text" placeholder="Search products...">
                                </div>
                            </form>
                        </div>
                        <div class="header-meta header-language d-flex align-items-center">
                            <div class="header-meta__social d-flex align-items-center ml-25">
                                <button class="header-cart tp-cart-toggle">
                                    <a href="{{ url('cart') }}"><i class="fal fa-shopping-cart"></i></a>
                                    <span class="tp-product-count"></span>
                                </button>
                                @guest
                                    <a href="{{ url('login') }}" class="header-meta__value mr-15"><i
                                            class="fal fa-user"></i></a>
                                @else
                                    <div class="header-meta__lang">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    {{ Auth::user()->name }}
                                                    <span><i class="fal fa-angle-down"></i></span>
                                                </a>
                                                <ul class="header-meta__lang-submenu">
                                                    <li>
                                                        <a href="#">Profile</a>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a
                                                            href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                        <form action="{{ route('logout') }}" method="post"
                                                            id="logout-form">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-area mt-20 d-none d-xl-block">
        <div class="for-megamenu p-relative">
            <div class="container">
                <div class="row align-items-center">
                    {{-- <div class="col-xl-2 col-lg-3">
                        <div class="cat-menu__category p-relative">
                            <a class="tp-cat-toggle" href="#" role="button"><i
                                    class="fal fa-bars"></i>Categories</a>
                            <div class="category-menu category-menu-off">
                                <ul class="cat-menu__list">
                                    <li><a href="{{ url('shop') }}"><i class="fal fa-user"></i> Laptop</a></li>
                                    <li><a href="{{ url('shop') }}"><i class="fal fa-shoe-prints"></i> Handphone</a>
                                    </li>
                                    <li><a href="{{ url('shop') }}"><i class="fal fa-smile"></i> Computer</a>
                                    </li>
                                    <li><a href="{{ url('shop') }}"><i class="fal fa-futbol"></i> Mouse</a>
                                    </li>
                                    <li><a href="{{ url('shop') }}"><i class="fal fa-crown"></i> Cosmetics</a></li>
                                    <li><a href="{{ url('shop') }}"><i class="fal fa-gift"></i> Silk Accessories</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-7 col-lg-6">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('shop') }}">Shop</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('about') }}">About</a>
                                    </li>
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-lg-3">
                        <div class="menu-contact">
                            <ul>
                                <li>
                                    <div class="menu-contact__item">
                                        <div class="menu-contact__icon">
                                            <i class="fal fa-phone"></i>
                                        </div>
                                        <div class="menu-contact__info">
                                            <a href="tel:0123456">908. 408. 501. 89</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-contact__item">
                                        <div class="menu-contact__icon">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="menu-contact__info">
                                            <a href="shop-location.html">Find Store</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->

<!-- header-xl-sticky-area -->
<div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('front/assets/img/logo/logodimension.png') }}"
                            width="50%" alt="logo"></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('shop') }}">Shop</a>
                            </li>
                            <li>
                                <a href="{{ url('about') }}">About</a>
                            </li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-4 col-lg-9">
                <div class="header-meta-info d-flex align-items-center justify-content-end">
                    <div class="header-meta__social  d-flex align-items-center">
                        <button class="header-cart tp-cart-toggle">
                            <a href="{{ url('cart') }}"><i class="fal fa-shopping-cart"></i></a>
                            <span class="tp-product-count"></span>
                        </button>
                    </div>
                    <div class="header-meta__search-5 ml-25">
                        <div class="header-search-bar-5">
                            <form action="#">
                                <div class="search-info-5 p-relative">
                                    <button class="header-search-icon-5"><i class="fal fa-search"></i></button>
                                    <input type="text" placeholder="Search products...">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-xl-sticky-end -->

<!-- header-md-lg-area -->
<div id="header-tab-sticky" class="tp-md-lg-header d-none d-md-block d-xl-none pt-30 pb-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 d-flex align-items-center">
                <div class="header-canvas flex-auto">
                    <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                </div>
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="front/assets/img/logo/logodimension.png" alt="logo"
                            width="50%"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="header-meta-info d-flex align-items-center justify-content-between">
                    <div class="header-search-bar">
                        <form action="#">
                            <div class="search-info p-relative">
                                <button class="header-search-icon"><i class="fal fa-search"></i></button>
                                <input type="text" placeholder="Search products...">
                            </div>
                        </form>
                    </div>
                    <div class="header-meta__social d-flex align-items-center ml-25">
                        <button class="header-cart p-relative tp-cart-toggle">
                            <i class="fal fa-shopping-cart"></i>
                            <span>2</span>
                        </button>
                        <a href="sign-in.html"><i class="fal fa-user"></i></a>
                        <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="header-mob-sticky" class="tp-md-lg-header d-md-none pt-20 pb-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3 d-flex align-items-center">
                <div class="header-canvas flex-auto">
                    <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                </div>
            </div>
            <div class="col-6">
                <div class="logo text-center">
                    <a href="{{ url('/') }}"><img src="front/assets/img/logo/logodimension.png" alt="logo"
                            width="50%"></a>
                </div>
            </div>
            <div class="col-3">
                <div class="header-meta-info d-flex align-items-center justify-content-end ml-25">
                    <div class="header-meta m-0 d-flex align-items-center">
                        <div class="header-meta__social d-flex align-items-center">
                            <button class="header-cart p-relative tp-cart-toggle">
                                <i class="fal fa-shopping-cart"></i>
                                <span>2</span>
                            </button>
                            <a href="sign-in.html"><i class="fal fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-md-lg-area -->
