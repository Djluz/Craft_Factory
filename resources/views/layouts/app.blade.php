<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<title>Craft Factory</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:assets/imgs/promo/ content=">
<link rel="shortcut icon" type="assets/imgs/promo/x-icon" href="{{ asset('assets/imgs/theme/favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
<link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
<link href="{{ asset('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap') }}" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@livewireStyles
</head>


<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                        <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="assets/imgs/theme/flag-fr.png" alt="">Français</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-dt.png" alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-ru.png" alt="">Pусский</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="{{route ('shop')}}">View details</a></li>
                                    <li>Super Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href="{{route ('shop')}}">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                            <ul>
                                <li><i class="fi-rs-user"></i>{{ Auth::user()->name }}  /
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <a href="{{ route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{ route('login')}}">Log In </a>  / <a href="{{ route('register')}}">Sign Up</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-0 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap pt-1">
                    <div class="logo logo-width-1">
                        <a href="/"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="header-right pe-3">
                        @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                @livewire('wishlist-icon-component')
                                @livewire('cart-icon-component')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative" id="navwrap">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/.#about"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="Craft Factory"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="{{route('product.category',['jewelry-accessories'])}}"><i class="CraftFactory-font-dress"></i>Jewelry & Accessories</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Jewelries</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Rings</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Necklaces</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Earrings</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Bracelets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Body Jewelry</a></li>

                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Accessories</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Hats & Caps</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Bags & Purses</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Sunglasses & Eyewear</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Belts & Suspenders</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['jewelry-accessories'])}}">Hair Accessories</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{asset('assets/imgs/banner/menu-banner-5.jpg')}}" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="{{route('product.category',['jewelry-accessories'])}}">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="{{asset('assets/imgs/banner/menu-banner-6.jpg')}}" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="{{route('product.category',['jewelry-accessories'])}}">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{route('product.category',['clothing-shoes'])}}"><i class="CraftFactory-font-tshirt"></i>Clothing & Shoes</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Clothing</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Dresses</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Tops</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Bottoms</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Overalls</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Suits & Blazers</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Shoes</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Boots</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Sneakers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Sandals</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Slippers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['clothing-shoes'])}}">Flats</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{asset('assets/imgs/banner/menu-banner-4.jpg')}}" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="{{route('product.category',['clothing-shoes'])}}">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{route('product.category',['home-living'])}}"><i class="CraftFactory-font-smartphone"></i> Home & Living</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Home</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Home Decor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Bedding</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Furniture</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Outdoor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Kitchen & Dinning</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Bath & Beauty</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Skin Care</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Hair Care</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Bath Accessories</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Fragrances</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['home-living'])}}">Makeup & Cosmetics</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{asset('assets/imgs/banner/menu-banner-2.jpg')}}" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="{{route('product.category',['home-living'])}}">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="{{asset('assets/imgs/banner/menu-banner-3.jpg')}}" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="{{route('product.category',['home-living'])}}">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <ul class="more_slide_open" style="display: none;">
                                            <li><a href="{{route('product.category',['art-collectibles'])}}"><i class="CraftFactory-font-cpu"></i>Art & Collectibles</a></li>
                                            <li><a href="{{route('product.category',['craft-supplies-tools'])}}"><i class="CraftFactory-font-diamond"></i>Craft Supplies & Tools</a></li>
                                            <li><a href="{{route('product.category',['toys-entertainment'])}}"><i class="CraftFactory-font-desktop"></i>Toys & Entertainment</a></li>
                                            <li><a href="{{route('product.category',['vintage'])}}"><i class="CraftFactory-font-home"></i>Vintage</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block py-0 my-0" id="navbar1">
                            <nav>
                                <ul>
                                    <li><a class="active mx-2 py-0 my-0" href="/">Home </a></li>
                                    <li><a href="/.#about" class="mx-2 py-0 my-0">About Us</a></li>
                                    <li><a href="{{route ('shop')}}" class="mx-2 py-0 my-0">Shop</a></li>
                                    <li><a href="{{route('contact')}}" class="mx-2 py-0 my-0">Contact Us</a></li>
                                    @auth
                                        <li><a href="#" class="mx-2 py-0 my-0">My Account<i class="fi-rs-angle-down"></i></a>
                                            @if(Auth::user()->utype == 'ADM')
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                                    <li><a href="{{route('admin.products')}}">Products</a></li>
                                                    <li><a href="{{route('admin.categories')}}">Categories</a></li>
                                                    <li><a href="{{route('admin.orders')}}">Orders</a></li>
                                                    <li><a href="{{route('admin.customers')}}">Customers</a></li>
                                                    <li><a href="{{route('admin.sales')}}">Sales</a></li>
                                                </ul>
                                            @else
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+63) 999-3181-620 </p>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            @livewire('wishlist-icon-component')
                            @livewire('cart-icon-component')

                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    @livewire('header-search-component')
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <a href="{{route('product.category',['jewelry-accessories'])}}"><i class="CraftFactory-font-dress"></i>Jewelry & Accessories</a><br>
                                <a href="{{route('product.category',['clothing-shoes'])}}"><i class="CraftFactory-font-tshirt"></i>Clothing & Shoes</a><br>
                                <a href="{{route('product.category',['home-living'])}}"><i class="CraftFactory-font-smartphone"></i> Home & Living</a><br>
                                <a href="{{route('product.category',['art-collectibles'])}}"><i class="CraftFactory-font-cpu"></i>Art & Collectibles</a></li><br>
                                <a href="{{route('product.category',['craft-supplies-tools'])}}"><i class="CraftFactory-font-diamond"></i>Craft Supplies & Tools</a><br>
                                <a href="{{route('product.category',['toys-entertainment'])}}"><i class="CraftFactory-font-desktop"></i>Toys & Entertainment</a><br>
                                <a href="{{route('product.category',['vintage'])}}"><i class="CraftFactory-font-home"></i>Vintage</a>

                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li><a class="active mx-2 py-0 my-0" href="/">Home </a></li>
                            <li><a href="/.#about" class="mx-2 py-0 my-0">About Us</a></li>
                            <li><a href="{{route ('shop')}}" class="mx-2 py-0 my-0">Shop</a></li>
                            <li><a href="{{route('contact')}}" class="mx-2 py-0 my-0">Contact Us</a></li>
                            @auth
                                <li><a href="#" class="mx-2 py-0 my-0">My Account<i class="fi-rs-angle-down"></i></a>
                                    @if(Auth::user()->utype == 'ADM')
                                        <ul class="sub-menu">
                                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                            <li><a href="{{route('admin.products')}}">Products</a></li>
                                            <li><a href="{{route('admin.categories')}}">Categories</a></li>
                                            <li><a href="{{route('admin.orders')}}">Orders</a></li>
                                            <li><a href="{{route('admin.customers')}}">Customers</a></li>
                                            <li><a href="{{route('admin.sales')}}">Sales</a></li>
                                        </ul>
                                    @else
                                        <ul class="sub-menu">
                                            <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                        </ul>
                                    @endif
                                </li>
                            @endauth
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    @auth
                    <ul>
                        <li><i class="fi-rs-user"></i>{{ Auth::user()->name }}  /
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <a href="{{ route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    </ul>
                    @else
                    <ul>
                        <li><i class="fi-rs-key"></i><a href="{{ route('login')}}">Log In </a>  / <a href="{{ route('register')}}">Sign Up</a></li>
                    </ul>
                    @endif
                    {{-- <div class="single-mobile-header-info">
                        <a href="login.html">Log In </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="register.html">Sign Up</a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+1) 0000-000-000 </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{$slot}}

    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                                <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong><span>&#8369;</span>100 coupon for first shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="form-subcriber d-flex wow fadeIn animated">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-2">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>N. Ty Street, Binondo, Manila
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone: </strong>(+63) 999-3181-620
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>craftfactory2023@gmail.com
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="/.#about">About Us</a></li>
                            <li><a href="/helpcenter">Help Center</a></li>
                            <li><a href="/privacypolicy">Privacy Policy</a></li>
                            <li><a href="/terms">Terms &amp; Conditions</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                        @auth

                                @if(Auth::user()->utype=='ADM')
                                    <li><a href="{{route('admin.dashboard')}}">My Dashboard</a></li>
                                    <li><a href="{{route('admin.orders')}}">Orders</a></li>
                                @else
                                    <li><a href="{{route('user.dashboard')}}">My Dashboard</a></li>
                                    <li><a href="{{route('user.orders')}}">Orders</a></li>
                                @endif

                        @endif

                            <li><a href="/cart">View Cart</a></li>
                            <li><a href="/wishlist">My Wishlist</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-1">
                        <h5 class="widget-title wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated">
                                <a href="https://www.facebook.com/daryljaneluz/"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a><br>
                                <a href="https://twitter.com/DarylJaneLuz1"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a><br>
                                <a href="https://www.instagram.com/daryljaneluz/"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a><br>
                                <a href="https://www.pinterest.ph/daryljaneluz/"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a><br>

                            </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="container pb-15 wow fadeIn animated mob-center">
            <div class="row">
                <div class="col-12 mb-15">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">
                        <a href="/privacypolicy">Privacy Policy</a> | <a href="/terms">Terms & Conditions</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        &copy; <strong class="text-brand">CraftFactory</strong> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Vendor JS-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6409c1f7b4b9dc0019a9521d&product=inline-share-buttons&source=platform" async="async"></script>
<!-- Template  JS -->
<script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
<script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
@stack('scripts')
</body>

</html>
