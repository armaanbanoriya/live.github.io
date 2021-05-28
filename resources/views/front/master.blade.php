<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title> @yield('title','')</title>
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{url('front/assets/img/favi.svg')}}" /> --}}

    <!--**********************************
        all css files
    *************************************-->

    <!--***************************************************
       fontawesome,bootstrap,plugins and main style css
     ***************************************************-->

    <link rel="stylesheet" href="{{url('front/assets/css/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/simple-line-icons.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('front/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/plugins/plugins.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/style.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
   
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--****************************
         Minified  css
    ****************************-->

    <!--***********************************************
       vendor min css,plugins min css,style min css
     ***********************************************-->
    <!-- <link rel="stylesheet" href="{{url('front/assets/css/vendor/vendor.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/plugins/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{url('front/assets/css/style.min.css')}}" /> -->

    <style>

     
        @media(min-width: 800px)
        {
            .prodimage{
                height: 550px;
                width: 400px;   
               
                position: relative;
                left: 109px;
            }
            
        }

        form.cmxform label.error, label.error
        {
            color: red;
            font-style: italic;
        }


        .toast-success
        {
            background-color:#000!important;
            position: relative!important;
            top: 300px;
        }

        .toast-warning
        {
            background-color: rgb(255, 61, 13) !important;
            position: relative!important;
            top: 300px;
        }

            /*Button start*/

           
            .btncss
            {
                /* text-align: center; */
                /* margin-top: 360px; */
            }
            .btnext
            {
                border: 1px solid #020609;
                background: none;
                padding: 10px 20px;
                font-size: 20px;

                cursor: pointer;
                margin: 10px;
                transition: 0.8s;
                position: relative;
                overflow: hidden;
            }
            .btnext1,.btnext2
            {
                color: #ebab20;
            }
            .btnext3,.btnext4{
                color: rgb(247, 243, 243);
            }
            .btnext1:hover,.btnext2:hover{
                color: #fff;
            }
            .btnext3:hover,.btnext4:hover{
                color: #000000;
            }
            .btnext::before{
                content: "";
                position: absolute;
                left: 0;
                width: 100%;
                /* height: 0%; */
                background: #000000;
                z-index: -1;
                transition: 0.8s;
            }
            .btnext1::before,.btnext3::before
            {
                top: 0;
                border-radius: 0 0 50% 50%;
            }
            .btnext2::before,.btnext4::before
            {
                bottom: 0;
                border-radius: 50% 50% 0 0;
            }
            .btnext3::before,.btnext4::before
            {
                height: 180%;
            }
            .btnext1:hover::before,.btnext2:hover::before
            {
                height: 180%;
            }
            .btnext3:hover::before,.btnext4:hover::before
            {
                height: 0%;
            }

        /*button end*/
    </style>
</head>

<body>


<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme3 offcanvas-mobile-menu">
    <div class="inner">
        <div class="border-bottom mb-4 pb-4 text-right">
            @guest

             
                <a href="{{url('signin')}}" style="position: relative;
                    right: 178px;
                    bottom: -23px;
                    font-size: 23px;" type="button" class="btn mlog">Login </a>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ ('signup') }}">{{ __('Register') }}</a> --}}
                    </li>



                    @endif
                   @else
            <li>
                <a style="position: relative;
                    right: 54px;
                    bottom: -23px;
                    font-size: 23px;" href="{{'#'}}" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">  {{ Auth::user()->name }} <i class="ion ion-ios-arrow-down"></i></a>
                <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">
                    <li><a href="{{url('myaccount')}}">My account</a></li>
                    <li><a href="{{url('checkout')}}">Checkout</a></li>
                    <li>

                        <a href="{{'front/logout'}}">Logout</a>
                    </li>
                </ul>
            </li>
            @endguest
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-head mb-4">
            <nav class="offcanvas-top-nav">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="mx-4"><a href="compare.html"><i class="ion-ios-loop-strong"></i> Compare <span>(0)</span>
                        </a></li>
                    <li class="mx-4">
                        <a href="wishlist.html"> <i class="ion-android-favorite-outline"></i> Wishlist
                            <span>(0)</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="offcanvas-menu">
            <ul>
                <li><a href="{{('/')}}"><span class="menu-text">Home</span></a>


                </li>
                <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="offcanvas-submenu">
                        <li>
                            <a href="#"><span class="menu-text">Shop Grid</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="shop-grid-3-column.html">Shop Grid 3 Column</a></li>
                                <li><a href="shop-grid-4-column.html">Shop Grid 4 Column</a></li>
                                <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Shop List</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="shop-grid-list.html">Shop List</a></li>
                                <li><a href="shop-grid-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li><a href="shop-grid-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Shop Single</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="single-product.html">Shop Single</a></li>
                                <li><a href="single-product-configurable.html">Shop Variable</a></li>
                                <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                <li><a href="single-product-group.html">Shop Group</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">other pages</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="about-us.html">About Page</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="compare.html">Compare Page</a></li>
                                <li><a href="login.html">Login &amp; Register Page</a></li>
                                <li><a href="myaccount.html">Account Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="#"><span class="menu-text">Blog</span></a>
                    <ul class="offcanvas-submenu">
                        <li><a href="#"><span class="menu-text">Blog Grid</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="blog-grid-3-column.html">Blog Grid 3 column</a></li>
                                <li><a href="blog-grid-4-column.html">Blog Grid 4 column</a></li>
                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                </li>
                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog List</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog Single</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="single-blog.html">Single Blog</a></li>
                                <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <div class="offcanvas-social py-30">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- offcanvas-mobile-menu end -->
<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme3">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="{{url('front/assets/img/product/4.jpg')}}"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>

        </ul>
        <a href="wishlist.html" class="btn theme--btn-ddefault btn--lg d-block d-sm-inline-block rounded-5 mt-30">view
            wishlist</a>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->

<div id="offcanvas-cart" class="offcanvas offcanvas-cart theme3">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/1.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/2.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/3.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <div class="sub-total d-flex flex-wrap justify-content-between">
            <strong>Subtotal :</strong>
            <span class="amount">$144.00</span>
        </div>
        <a href="{{url('cart')}}" class="btn theme--btn-ddefault btn--lg d-block d-sm-inline-block rounded-5 mr-sm-2">view
            cart</a>
        <a href="{{url('checkout')}}"
            class="btn theme-btn--dark3 btn--lg d-block d-sm-inline-block mt-4 mt-sm-0 rounded-5">checkout</a>
        <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
    </div>
</div>

<!-- OffCanvas Cart End -->
<!-- header start -->
<header>
    <!-- header top start -->
    <div id="sticky" class="header-top theme3 bg-dark d-none d-lg-block">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-xl-9 col-lg-8 position-xl-relative">
                    <!-- header bottom start -->
                    <nav class="header-bottom">
                        <ul class="main-menu d-flex">
                            <li class="active ml-0">
                                <a href="{{url('/')}}" class="pl-0">Home </a>

                            </li>
                            <li class="position-static">
                                <a href=" #">Shop <i class="ion-ios-arrow-down"></i></a>
                                <ul class="mega-menu row">
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop Grid</a></li>
                                            <li><a href="shop-grid-3-column.html">Shop Grid 3 Column</a>
                                            </li>
                                            <li><a href="shop-grid-4-column.html">Shop Grid 4 Column</a>
                                            </li>
                                            <li><a href="shop-grid-left-sidebar.html">Shop Grid Left
                                                    Sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">Shop Grid Right
                                                    Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop List</a></li>
                                            <li><a href="shop-grid-list.html">Shop List</a></li>
                                            <li><a href="shop-grid-list-left-sidebar.html">Shop List Left
                                                    Sidebar</a>
                                            </li>
                                            <li><a href="shop-grid-list-right-sidebar.html">Shop List Right
                                                    Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                                            <li><a href="single-product.html">Shop Single</a></li>
                                            <li><a href="single-product-configurable.html">Shop Variable</a>
                                            </li>
                                            <li><a href="single-product-affiliate.html">Shop Affiliate</a>
                                            </li>
                                            <li><a href="single-product-group.html">Shop Group</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">other pages</a></li>
                                            <li><a href="about-us.html">About Page</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="compare.html">Compare Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-12 mt-4">
                                        <a href="single-product.html" class="zoom-in overflow-hidden"><img
                                                src="{{url('front/assets/img/mega-menu/4.jpg')}}" alt="img"></a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Blog <i class="ion-ios-arrow-down"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Blog Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid-3-column.html">Blog Grid 3 column</a>
                                            </li>
                                            <li><a href="blog-grid-4-column.html">Blog Grid 4 column</a>
                                            </li>
                                            <li><a href="blog-grid-left-sidebar.html">Blog Grid Left
                                                    Sidebar</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right
                                                    Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog List</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list-left-sidebar.html">Blog List Left
                                                    Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right
                                                    Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog Single</a>
                                        <ul class="sub-menu">
                                            <li><a href="single-blog.html">Single Blog</a></li>
                                            <li><a href="blog-single-left-sidebar.html">Blog Single Left
                                                    Sidebar</a>
                                            </li>
                                            <li><a href="blog-single-right-sidebar.html">Blog Single Right
                                                    Sidbar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact Us</a></li>
                        </ul>
                    </nav>
                    <!-- header bottom end -->
                </div>
                <div class="col-xl-3 col-lg-4">
                    <nav class="navbar-top pb-2 pb-md-0">
                        <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                        @guest
                            <li>
                                <a href="{{url('signin')}}" >Login </a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ ('signup') }}">{{ __('Register') }}</a> --}}
                            </li>
                        @endif
                        @else
                            <li>
                                <a href="{{'#'}}" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">  {{ Auth::user()->name }} <i class="ion ion-ios-arrow-down"></i></a>
                                <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">
                                    <li><a href="{{url('myaccount')}}">My account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                          </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                          </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest




                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->
    <!-- header-middle satrt -->
    <div class="header-middle theme3 bg-white py-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5 col-lg-2 order-first">
                    <div class="logo text-center text-sm-left mb-30 mb-sm-0">
                        <a href="{{url('/')}}"><img src="{{url('front/assets/img/logo/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-0">
                    <div class="d-flex flex-wrap w-100 align-items-center">
                        <div class="vertical-menu d-none d-lg-block">
                            <button class="menu-btn d-flex"><span class="ion-android-menu"></span>All Categories<span
                                    class="ion-ios-arrow-down d-block ml-auto"></span> </button>
                            <ul class="vmenu-content display-none">

                                <li class="menu-item">
                                    <a href="#"> Beauty & Health <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-mega-menu flex-wrap">
                                        <li>
                                            <a href="#">
                                                <span> <strong>Makeup</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Lips</a></li>
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Makeup Tools</a></li>
                                            </ul>

                                        </li>

                                    </ul>
                                    <!-- sub menu -->
                                </li>
                                <li class="menu-item">
                                    <a href="#">Skin Care <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-sub-menu">
                                        <li>
                                            <ul class="submenu-item">
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Skin Care Tools</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li class="menu-item">
                                    <a href="#"> Health Care <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-sub-menu">
                                        <li>
                                            <ul class="submenu-item">
                                                <li><a href="#">Massage & Relaxation</a></li>
                                                <li><a href="#">Household Health Monitors</a></li>
                                                <li><a href="#">Chinese Medicine</a></li>
                                                <li><a href="#">Personal Health Care Items</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li class="menu-item"><a href="#">Face</a></li>
                                <li class="menu-item"><a href="#">Eyes</a></li>
                                <li class="menu-item"><a href="#">Lips</a></li>
                                <li class="menu-item"><a href="#">Makeup Tools</a></li>
                                <li class="menu-item"><a href="#">Skin Care Tools</a></li>
                                <li class="menu-item"><a href="#">Massage & Relaxation</a></li>
                            </ul>
                            <!-- menu content -->
                        </div>
                        <div class="search-form width-calc-from-left pl-35 mt-30 mt-lg-0">
                            <form class="form-inline position-relative">
                                <input class="form-control theme3" type="search"
                                    placeholder="Enter your search key ...">
                                <button class="btn bg-white search-btn position-left" type="submit"><i
                                        class="icon-magnifier"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-lg-3">
                    <!-- search-form end -->
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                        <div class="cart-block-links theme3">
                            <ul class="d-flex">
                                <li>
                                    <a href="compare.html">
                                        <span class="position-relative">
                                            <i class="icon-shuffle"></i>
                                            {{-- <span class="badge cbdg1">1</span> --}}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                                        <span class="position-relative">
                                            <i class="icon-heart"></i>
                                            {{-- <span class="badge cbdg1">3</span> --}}
                                        </span>
                                    </a>
                                </li>
                                <li class="mr-0 cart-block position-relative">
                                    <a class="offcanvas-toggle" href="#offcanvas-cart">
                                        <span class="position-relative">
                                            <i class="icon-bag"></i>
                                            {{-- <span class="badge cbdg1">3</span> --}}
                                        </span>
                                        <span class="cart-total position-relative">$90.00</span>
                                    </a>
                                </li>
                                <!-- cart block end -->
                            </ul>
                        </div>
                        <div class="mobile-menu-toggle theme3 d-lg-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewbox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->
    <div class="mobile-category-nav theme3 d-lg-none pb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li class="menu-item-has-children menu-item-has-children-1">
                                    <a href="#">Accessories & Parts<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-1">
                                        <li><a href="#">Cables & Adapters</a></li>
                                        <li><a href="#">Batteries</a></li>
                                        <li><a href="#">Chargers</a></li>
                                        <li><a href="#">Bags & Cases</a></li>
                                        <li><a href="#">Electronic Cigarettes</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-2">
                                    <a href="#">Camera & Photo<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-2">
                                        <li><a href="#">Digital Cameras</a></li>
                                        <li><a href="#">Camcorders</a></li>
                                        <li><a href="#">Camera Drones</a></li>
                                        <li><a href="#">Action Cameras</a></li>
                                        <li><a href="#">Photo Studio Supplies</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-3">
                                    <a href="#">Smart Electronics <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-3">
                                        <li><a href="#">Wearable Devices</a></li>
                                        <li><a href="#">Smart Home Appliances</a></li>
                                        <li><a href="#">Smart Remote Controls</a></li>
                                        <li><a href="#">Smart Watches</a></li>
                                        <li><a href="#">Smart Wristbands</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-4">
                                    <a href="#">Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-4">
                                        <li><a href="#">Televisions</a></li>
                                        <li><a href="#">TV Receivers</a></li>
                                        <li><a href="#">Projectors</a></li>
                                        <li><a href="#">Audio Amplifier Boards</a></li>
                                        <li><a href="#">TV Sticks</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-5">
                                    <a href="#">Portable Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-5">
                                        <li><a href="#">Headphones</a></li>
                                        <li><a href="#">Speakers</a></li>
                                        <li><a href="#">MP3 Players</a></li>
                                        <li><a href="#">VR/AR Devices</a></li>
                                        <li><a href="#">Microphones</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-6">
                                    <a href="#">Video Game <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-6">
                                        <li><a href="#">Handheld Game Players</a></li>
                                        <li><a href="#">Game Controllers</a></li>
                                        <li><a href="#">Joysticks</a></li>
                                        <li><a href="#">Stickers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Televisions</a></li>
                                <li><a href="#">Digital Cameras</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Wearable Devices</a></li>
                                <li><a href="#">Smart Watches</a></li>
                                <li><a href="#">Game Controllers</a></li>
                                <li><a href="#"> Smart Home Appliances</a></li>
                                <li class="hidden"><a href="#">Projectors</a></li>
                                <li>
                                    <a href="#" id="more-btn"><i class="ion-ios-plus-empty"></i>
                                        More Categories</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=======  End of category menu =======-->
</header>
<!-- header end -->


@yield('content')

<!-- footer strat -->
<footer class="bg-light theme3 position-relative">
    <!-- footer bottom start -->
    <div class="footer-bottom pt-80 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-30">
                    <div class="footer-widget mx-w-400">
                        <div class="footer-logo mb-35">
                            <a href="index.html">
                                <img src="{{url('front/assets/img/logo/logo.png')}}" alt="footer logo">
                            </a>
                        </div>
                        <p class="text mb-30">A Laravel project. Conceptualized by Armaan Banoriya.</p>
                        <div class="address-widget mb-30">
                            <div class="media">
                                <span class="address-icon mr-3">
                                    <img src="{{url('front/assets/img/icon/phone3.png')}}" alt="phone">
                                </span>
                                <div class="media-body">
                                    <p class="help-text text-uppercase">NEED HELP?</p>
                                    <h4 class="title text-dark"><a href="tel:+91 7773007074">(+91) 7773007074</a></h4>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Information</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="#">Delivery</a></li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="#">Secure payment</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Stores</a></li>
                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Custom Links</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="#">Legal Notice</a></li>
                            <li><a href="#">Prices drop</a></li>

                            <li><a href="#">New products</a></li>

                            <li><a href="#">Best sales</a></li>

                            <li><a href="login.html">Login</a></li>

                            <li><a href="myaccount.html">My account</a></li>
                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Newsletter</h2>
                            </div>
                        </div>
                        <p class="text mb-20">You may unsubscribe at any moment. For that purpose, please find our
                            contact info in the legal notice.</p>
                        <div class="nletter-form mb-35">
                            <form class="form-inline position-relative"
                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                target="_blank" method="post">
                                <input class="form-control" type="text" placeholder="Your email address">
                                <button class="btn nletter-btn text-capitalize" type="submit">Sign
                                    up</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom end -->
    <!-- coppy-right start -->
    <div class="coppy-right pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-left">
                        <p class="mb-3 mb-md-0">Copyright &copy; <a href="https://www.linkedin.com/in/armaan-banoriya-b59307108/">Armaan Banoriya</a>. All
                            Rights Reserved</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8">

                </div>
            </div>
        </div>
    </div>
    <!-- coppy-right end -->
</footer>
<!-- footer end -->

<!-- modals start -->
<!-- first modal -->
<div class="modal fade theme3 style1" id="quick-view" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 mx-auto col-lg-5 mb-5 mb-lg-0">
                        <div class="product-sync-init mb-20">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="{{url('front/assets/img/hot-deals/thumb/4.jpg')}}" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="{{url('front/assets/img/hot-deals/thumb/5.jpg')}}" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="{{url('front/assets/img/hot-deals/thumb/6.jpg')}}" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="{{url('front/assets/img/hot-deals/thumb/7.jpg')}}" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>

                        <div class="product-sync-nav">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="{{url('front/assets/img/hot-deals/thumb/4.2x.jpg')}}"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="{{url('front/assets/img/hot-deals/thumb/5.2x.jpg')}}"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="{{url('front/assets/img/hot-deals/thumb/6.2x.jp')}}g"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="{{url('front/assets/img/hot-deals/thumb/7.2x.jp')}}g"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5 mt-md-0">
                        <div class="modal-product-info">
                            <div class="product-head">
                                <h2 class="title">New Balance Running Arishi trainers in triple</h2>
                                <h4 class="sub-title">Reference: demo_5</h4>
                                <div class="star-content mb-20">
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                            <div class="product-body mb-40">
                                <div class="d-flex align-items-center mb-30">
                                    <h6 class="product-price"><del class="del">$23.90</del>
                                        <span class="onsale">$21.51</span></h6>
                                    <span class="badge position-static bg-dark p-2 rounded-0 ml-2">Save 10%</span>
                                </div>
                                <p>Break old records and make new goals in the New Balance® Arishi Sport v1.</p>
                                <ul>
                                    <li>Predecessor: None.</li>
                                    <li>Support Type: Neutral.</li>
                                    <li>Cushioning: High energizing cushioning.</li>
                                </ul>
                            </div>
                            <div class="product-footer">
                                <div class="product-count style d-flex flex-column flex-sm-row my-4">
                                    <div class="count d-flex">
                                        <input type="number" min="1" max="10" step="1" value="1">
                                        <div class="button-group">
                                            <button class="count-btn increment"><i
                                                    class="fas fa-chevron-up"></i></button>
                                            <button class="count-btn decrement"><i
                                                    class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn theme-btn--dark3 btn--xl mt-5 mt-sm-0 rounded-5">
                                            <span class="mr-2"><i class="ion-android-add"></i></span>
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="addto-whish-list">
                                    <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                                    <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                                </div>
                                <div class="pro-social-links mt-10">
                                    <ul class="d-flex align-items-center">
                                        <li class="share">Share</li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-google"></i></a></li>
                                        <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style2" id="compare" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="title"><i class="fa fa-check"></i> Product added to compare.</h5>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style3" id="add-to-cart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center bg-dark">
                <h5 class="modal-title" id="add-to-cartCenterTitle"> <span class="ion-checkmark-round"></span>
                    Product successfully added to your shopping cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5 divide-right">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{url('front/assets/img/hot-deals/thumb/4.2x.jpg')}}" alt="img">
                            </div>
                            <div class="col-md-6 mb-2 mb-md-0">
                                <h4 class="product-name">New Balance Running Arishi trainers in triple</h4>
                                <h5 class="price">$$29.00</h5>
                                <h6 class="color"><strong>Dimension: </strong>: <span class="dmc">40x60cm</span> </h6>
                                <h6 class="quantity"><strong>Quantity:</strong>&nbsp;1</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="modal-cart-content">
                            <p class="cart-products-count">There is 1 item in your cart.</p>
                            <p><strong>Total products:</strong>&nbsp;$123.72</p>
                            <p><strong>Total shipping:</strong>&nbsp;$7.00 </p>
                            <p><strong>Taxes</strong>&nbsp;$0.00</p>
                            <p><strong>Total:</strong>&nbsp;$130.72 (tax excl.)</p>
                            <div class="cart-content-btn">
                                <button type="button" class="btn theme-btn--dark3 btn--md mt-4"
                                    data-dismiss="modal">Continue
                                    shopping</button>
                                <button class="btn theme-btn--dark3 btn--md mt-4"><i
                                        class="ion-checkmark-round"></i>Proceed to
                                    checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modals end -->



    <!--***********************
        all js files
     ***********************-->

    <!--******************************************************
        jquery,modernizr ,poppe,bootstrap,plugins and main js
     ******************************************************-->

    <script src="{{url('front/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('front/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{url('front/assets/js/popper.min.js')}}"></script>
    <script src="{{url('front/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{url('front/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('front/assets/js/plugins/plugins.js')}}"></script>
    <script src="{{url('front/assets/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- // Message Script Start --}}
        @if(Session::has('l_success'))
      <script>
      toastr.success("{!!Session::get('l_success')!!}");
     </script>
      @endif

      @if(Session::has('lo_success'))
      <script>
      toastr.success("{!!Session::get('lo_success')!!}");
     </script>
      @endif
      {{-- MEssage end --}}

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--***************************
          Minified  js
     ***************************-->

    <!--***********************************
         vendor,plugins and main js
      ***********************************-->

    <!-- <script src="{{url('front/assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{url('front/assets/js/plugins/plugins.min.js')}}"></script>
    <script src="{{url('front/assets/js/main.js')}}"></script> -->
    <script src="{{url('front/assets/js/jquery.validate.js')}}"></script>
    <script>
        function select_payment_method()
        {
        if($('.stripe').is(':checked') || $('.cod').is(':checked') || $('.paytm').is(':checked') || $('.razorpay').is(':checked') ){
        alert('checked');
        }
        else{
        alert('Please select payment method');
        return false;
    }
        }

    </script>
   
    <script>
       		// validate signup form on keyup and submit
               $("#registerForm").validate({
			rules: {
				name: "required",
				name: {
                    
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true,
                    remote: "check-email"
				},
				
				
			},
			messages: {
				name: "Please enter your Name",
				
				
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email:{ 
                    required: "Please Enter Your Email",
					email: "Please Enter Your Valid Email",
                    remote: "Email already exists"
                   
                }
			}
		});
        // Login Form Jquery
        
        $("#loginForm").validate({
			rules: {
                staticinputEmail: {
					required: true,
					email: true
                },			
				inputsPassword: {
					required: true
				}
				
			},
			messages: {					
			
				staticinputEmail: { 
                    required: "Please Enter Your Email",
					email: "Please Enter Your Valid Email"
                                      
                },
                inputsPassword: {
					required: "Please provide a password"
				}
			
            }
		});

    </script>
    


</body>

</html>
