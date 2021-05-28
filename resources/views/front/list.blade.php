@extends('front.master')

@section('title','Bookshelf Ecommerce')

@section('content')
 
<!-- main slider start -->
<section class="bg-light position-relative">
    <div class="main-slider dots-style theme3">
        @foreach ($banner as $banner )
     
        <div class="slider-item bg-img" style="background: url('{{ url('/upload/'.$banner->image) }}');  
            background-repeat: no-repeat;
            background-position: center bottom;
            background-size: cover;">
            
            <div class="container">
                <div class="row align-items-center slider-height">
                    <div class="col-12">
                        <div class="slider-content d-inline-block text-center">
                            <p class="text text-lighten text-uppercase animated mb-25" data-animation-in="fadeInDown">
                                {{$banner->title}}</p>
                            <h4 class="title text-dark animated text-capitalize mb-25" data-animation-in="fadeInLeft"
                                data-delay-in="1">{{$banner->headingtitle}}</h4>
                            <h2 class="sub-title text-dark animated" data-animation-in="fadeInRight" data-delay-in="2">{{$banner->boldheadingtitle}}
                                </h2>  
                            <a href="shop-grid-4-column.html"
                                class="btn theme--btn3 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                                data-animation-in="zoomIn" data-delay-in="3">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- slider-item end -->
        {{-- <div class="slider-item bg-img bg-img8">
            <div class="container">
                <div class="row align-items-center slider-height">
                    <div class="col-12">
                        <div class="slider-content d-inline-block text-center">
                            <p class="text text-lighten text-uppercase animated mb-25" data-animation-in="fadeInLeft">
                                Organic Skin care</p>
                            <h4 class="title text-dark animated text-capitalize mb-25" data-animation-in="fadeInRight"
                                data-delay-in="1">Perfect Summer</h4>
                            <h2 class="sub-title text-dark animated" data-animation-in="fadeInUp" data-delay-in="2">Skin
                                Care Solution</h2>
                            <a href="shop-grid-4-column.html"
                                class="btn theme--btn3 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                                data-animation-in="zoomIn" data-delay-in="3">Skin Care Solution</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- slider-item end -->
    </div>
    <!-- slick-progress -->
    <div class="slick-progress">
        <span></span>
    </div>
    <!-- slick-progress end-->
</section>
<!-- main slider end -->
<!-- common banner  start -->

{{-- <div class="common-banner bg-white pt-80">
     
    <div class="container">
        <div class="row">
           
            <div class="col-md-6 mb-30">
                                 
               
                <div class="banner-thumb">
                    @foreach ($subimages as $subimages ) 
                    <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                        
                        <img src="{{ url('/upload/'.$subimages->image) }}" alt="banner-thumb-naile">
                        
                    </a>
                    @endforeach
                </div>
               
           
            
        </div>
    </div>
    
</div> --}}

<!-- common banner  end -->
<!-- product tab start -->
<section class="product-tab theme3 bg-white pt-50 pb-80">
    <div class="container">
        <div class="product-tab-nav mb-35">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center mb-30">
                        <h2 class="title text-dark text-capitalize">Our products</h2>
                        <p class="text mt-10">Add our products to weekly line up</p>
                    </div>
                </div>
                <div class="col-12">
                    <nav class="product-tab-menu">
                        
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            @foreach ($category as $category)
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab"  href="{{url('category/'.$category->id)}}"
                                    role="tab" aria-controls="pills-home" aria-selected="true">{{$category->name}}</a>
                            </li>
                            
                            @endforeach
                        </ul>
                    
                    </nav>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <!-- first tab-pane -->
                
                        
                   
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                       
                        <div class="product-slider-init slick-nav">
                            @foreach ($products as $products)
                                
                           
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                                
                                                
                                                <a href="{{url('productdetail/'.$products->id)}}">
                                                    <img src="{{ url('/upload/'.$products->product_image) }}" 
                                                    style="height: 360px; width: 360px; "        alt="thumbnail">
                                                </a>
                                             
                                               
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="{{'productdetail/'.$products->id}}">
                                                        {{$products->product_name}}</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"><span>Rs. </span> {{$products->product_price}}</h6>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- slider-item end -->
                            
                        </div>
                    </div>
                    <!-- second tab-pane -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="product-slider-init slick-nav">
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/33.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                            Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price">$11.90</h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-success top-left">-10%</span>
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/34.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                            Fresh Foam Kaymin from new zeland</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price">$11.90</h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/35.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                            Couture
                                                            Tricot Logo Stripe Jacket</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"> $21.51</h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/36.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                            Couture
                                                            Tricot Logo Stripe Jacket</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"><del class="del">$23.90</del>
                                                            <span class="onsale">$21.51</span></h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/37.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                            Men's
                                                            Slim Fit Shirt Short Sleeve...</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price">$11.90</h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/38.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                            Men's
                                                            Slim Fit Shirt Short Sleeve...</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"><del class="del">$23.90</del>
                                                            <span class="onsale">$21.51</span></h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                        </div>
                    </div>
                    <!-- third tab-pane -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="product-slider-init slick-nav">
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/33.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                            Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price">$11.90</h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-success top-left">-10%</span>
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/34.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                            Fresh Foam Kaymin from new zeland</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price">$11.90</h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/35.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                            Couture
                                                            Tricot Logo Stripe Jacket</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"> $21.51</h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/36.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                            Couture
                                                            Tricot Logo Stripe Jacket</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"><del class="del">$23.90</del>
                                                            <span class="onsale">$21.51</span></h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/37.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                            Men's
                                                            Slim Fit Shirt Short Sleeve...</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price">$11.90</h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/38.jpg"
                                                        alt="thumbnail">
                                                </a>
                                                <!-- product links -->
                                                <ul class="product-links d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="add to wishlist" class="icon-heart"> </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Add to compare" class="icon-shuffle"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                title="Quick view" class="icon-magnifier"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                            Men's
                                                            Slim Fit Shirt Short Sleeve...</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"><del class="del">$23.90</del>
                                                            <span class="onsale">$21.51</span></h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider-item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
<!-- new arrival section start -->
{{-- <section class="theme3 bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">New Arrivals</h2>
                    <p class="text mt-10">Add new products to weekly line up</p>
                </div>
            </div>
            <div class="col-12">
                <div class="product-slider-init slick-nav">
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="front/assets/img/new-products/1.jpg" alt="thumbnail">
                                            <img class="second-img" src="front/assets/img/new-products/1.1.jpg"
                                                alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="front/assets/img/new-products/2.jpg" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                    Fresh Foam Kaymin from new zeland</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-success top-left">-10%</span>
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="front/assets/img/new-products/3.jpg" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"> $21.51</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="front/assets/img/new-products/4.jpg" alt="thumbnail">
                                            <img class="second-img" src="front/assets/img/new-products/4.1.jpg"
                                                alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="front/assets/img/new-products/5.jpg" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="front/assets/img/new-products/6.jpg" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                        <ul class="product-links d-flex justify-content-center">
                                            <li>
                                                <a href="wishlist.html">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="add to wishlist" class="icon-heart"> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Add to compare" class="icon-shuffle"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom"
                                                        title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- new arrival section end -->
<!-- popular-section  start -->
{{-- <div class="popular-section bg-lighten theme3 bg-white pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">Popular Categories</h2>
                    <p class="text mt-10">Some of our popular categories include cosmetic
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="popular-slider-init dots-style">
                    <div class="slider-item">
                        <div class="card popular-card zoom-in">
                            <div class="card-body">
                                <a href="#" class="thumb-naile d-block overflow-hidden"> <img class="d-block mx-auto"
                                        src="front/assets/img/popular/12.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Skin Care <span>(17)</span></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card zoom-in">
                            <div class="card-body">
                                <a href="#" class="thumb-naile d-block overflow-hidden"> <img class="d-block mx-auto"
                                        src="front/assets/img/popular/13.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Health Care <span>(17)</span></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card zoom-in">
                            <div class="card-body">
                                <a href="#" class="thumb-naile d-block overflow-hidden"> <img class="d-block mx-auto"
                                        src="front/assets/img/popular/14.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Makeup <span>(18)</span></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card zoom-in">
                            <div class="card-body">
                                <a href="#" class="thumb-naile d-block overflow-hidden"> <img class="d-block mx-auto"
                                        src="front/assets/img/popular/15.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Nail Art & Tools <span>(19)</span></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card zoom-in">
                            <div class="card-body">
                                <a href="#" class="thumb-naile d-block overflow-hidden"> <img class="d-block mx-auto"
                                        src="front/assets/img/popular/16.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Chinese Medicine <span>(20)</span></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card popular-card zoom-in">
                            <div class="card-body">
                                <a href="#" class="thumb-naile  d-block overflow-hidden"> <img class="d-block mx-auto"
                                        src="front/assets/img/popular/12.jpg" alt="img"></a>
                                <h3 class="popular-title">
                                    <a href="#"> Skin Care <span>(21)</span></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- popular-section  end -->
<!-- brand slider start -->
{{-- <div class="brand-slider-section theme3 bg-white py-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-init theme2 slick-nav-brand">
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="front/assets/img/brand/1.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="front/assets/img/brand/2.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="front/assets/img/brand/3.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="front/assets/img/brand/4.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="front/assets/img/brand/5.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="front/assets/img/brand/2.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="front/assets/img/brand/3.jpg" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- brand slider end -->
<!-- common banner  start -->
{{-- <div class="common-banner bg-white pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-30">
                <div class="banner-thumb common-bthumb1">
                    <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                        <img src="front/assets/img/banner/22.jpg" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="banner-thumb common-bthumb1">
                    <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                        <img src="front/assets/img/banner/23.jpg" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- common banner  end -->
<!-- featured  slider start-->
{{-- <section class="featured-slider theme3 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb-30">
                    <h2 class="title text-dark text-capitalize">Featured products </h2>
                </div>
            </div>
            <div class="col-12">
                <div class="featured-init slick-nav">
                    <div class="slider-item">
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                        Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/2.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Juicy Couture Solid
                                                        Sleeve Puffer Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                    </div>
                    <!-- slider-item End -->
                    <div class="slider-item">
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/3.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">New Balance Fresh
                                                        Foam LAZR v1 Sport</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price"><del class="del">$23.90</del>
                                                        <span class="onsale">$21.51</span></h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/4.jpg"
                                                    alt="thumbnail">
                                                <img class="second-img" src="front/assets/img/new-products/4.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Hooded Wind and
                                                        Water Resistant Shell</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                    </div>
                    <!-- slider-item End -->
                    <div class="slider-item">
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/5.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">New Balance Fresh
                                                        Foam Kaymin</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/6.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Juicy Couture Tricot
                                                        Logo Stripe Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                    </div>
                    <!-- slider-item End -->
                    <div class="slider-item">
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/1.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Juicy Couture Juicy
                                                        Quilted Terry Track Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/4.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Couture Juicy
                                                        Quilted Terry Track Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                    </div>
                    <!-- slider-item End -->
                    <div class="slider-item">
                        <div class="product-list mb-30">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Fila Locker Room
                                                        Varsity Jacket</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                        <div class="product-list">
                            <div class="card product-card no-shadow">
                                <div class="card-body p-0">
                                    <div class="media">
                                        <div class="product-thumbnail">
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/new-products/4.jpg"
                                                    alt="thumbnail">
                                                <img class="second-img" src="front/assets/img/new-products/4.1.jpg"
                                                    alt="thumbnail">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title"><a href="shop-grid-4-column.html">Calvin Klein Jeans
                                                        Reflective Logo Full Zip</a></h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="product-price">$11.90</h6>
                                                    <button class="pro-btn" data-toggle="modal"
                                                        data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- "product-list End -->
                    </div>
                    <!-- slider-item End -->
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- featured  slider end-->
<!-- staic media start -->
{{-- <section class="static-media-section theme-bg3 py-45">
    <div class="container">
        <div class="static-media-wrap p-0">
            <div class="row">
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/2.png"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">Free Shipping</h4>
                            <p class="text text-white">On all orders over $75.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="assets/img/icon/3.png"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">Free Returns</h4>
                            <p class="text text-white">Returns are free within 9 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/5.png"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">Support 24/7</h4>
                            <p class="text text-white">Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/4.png"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">100% Payment Secure</h4>
                            <p class="text text-white">Your payment are safe with us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- staic media end -->
<!-- brand slider start -->
@endsection

