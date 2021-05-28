@extends('front.master')

@section('title','View Products')

@section('content')
<!-- breadcrumb-section start -->
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme3 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-grid-3-column.html">Bags & Shoes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Originals Windbreaker Winter Jacket</li>
                </ol>
            </div>
        </div> 
    </div>
</nav>
<!-- breadcrumb-section end -->

<!-- breadcrumb-section end -->
<!-- product-single start -->
<section class="product-single theme3 pt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative">
                    <span class="badge badge-danger top-right">New</span>
                </div>
                <div class="product-sync-init mb-20">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{'/upload/'.$as->product_image}}" class="prodimage" 
                             alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{url('front/assets/img/single-product/2.j')}}pg')}}" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{url('front/assets/img/single-product/3.j')}}" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{url('front/assets/img/single-product/4.j')}}" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                </div>

                <div class="product-sync-nav single-product">
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"> <img src="{{url('front/assets/img/single-product/1.jpg')}}"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"> <img src="{{url('front/assets/img/single-product/2.jpg')}}"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="{{url('front/assets/img/single-product/3.jpg')}}"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="{{url('front/assets/img/single-product/4.jpg')}}"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-md-0">
                <div class="single-product-info">
                    <div class="single-product-head">
                        <h2 class="title mb-20">{{$as->product_name}}</h2>
                        <div class="star-content mb-20">
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span>
                                Read reviews <span>(1)</span></a>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i
                                        class="far fa-edit"></i></span> Write a review</a>
                        </div>
                    </div>
                    <div class="product-body mb-40">
                        <div class="d-flex align-items-center mb-30">
                            <h6 class="product-price mr-20"><del class="del"></del>
                                <span class="onsale">Rs. {{$as->product_price}}/-</span></h6>
                            <span class="badge position-static bg-dark rounded-0"></span>
                        </div>
                        <p>{{$as->product_description}}.</p>
                        {{-- <ul>
                            <li>Part of the Kaval Collection.</li>
                            <li>Regular fit is eased, but not sloppy, and perfect for any activity.</li>
                            <li>Plain-woven jacket specifically constructed for freedom of movement.</li>
                        </ul> --}}
                    </div>
                   
                     <div class="product-footer">
                        <form method="POST" action="{{url('addtocart')}}">
                        <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">
                            
                            <div class="count d-flex">                               
                                <input for='increment' type="number" name="product_quantity"  min="1" max="10" step="1" value="1">
                                <div class="button-group">
                                    <button type="button" id="increment" class="count-btn increment"><i class="fas fa-chevron-up"></i></button>
                                    <button type="button" class="count-btn decrement"><i class="fas fa-chevron-down"></i></button>
                                </div>
                            </div>
                            <div>

                                
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$as->id}}" id="product_id">
                                    <input type="hidden" name="product_name" value="{{$as->product_name}}"  id="product_name">
                                    <input type="hidden" name="product_price" value="{{$as->product_price}}" id="product_price">
                                    <input type="hidden" name="product_image" value="{{$as->product_image}}" id="product_image">

                                    <div class="btncss"> 
                                    <button  type="submit" name="addtocart" class="btnext btnext3 btn--xl mt-5 mt-sm-0 rounded-5 ">
                                    <span class="mr-2"><i class="ion-android-add"></i></span>                                    
                                    Add to cart
                                    </button>
                                    {{-- theme-btn--dark3 btn--xl mt-5 mt-sm-0 rounded-5 --}}
                                    </div>
                               
                              
                            
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
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-single end -->
<!-- product tab start -->
<div class="product-tab theme3 bg-white pt-60 pb-80">
    <div class="container">
        <div class="product-tab-nav">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav class="product-tab-menu single-product">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Product Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
                            </li>
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
                        <div class="single-product-desc">
                            <ul>
                                <li>
                                    Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket.
                                </li>
                                <li>
                                    Part of the Kaval Collection.
                                </li>
                                <li>
                                    Regular fit is eased, but not sloppy, and perfect for any activity.
                                </li>
                                <li>
                                    Plain-woven jacket specifically constructed for freedom of movement.
                                </li>
                                <li>
                                    Soft fleece lining delivers lightweight warmth.
                                </li>
                                <li>
                                    Attached drawstring hood.
                                </li>
                                <li>
                                    Full-length zip closure.
                                </li>
                                <li>
                                    Long sleeves with stretch cuffs.
                                </li>
                                <li>
                                    Side hand pockets.
                                </li>
                                <li>
                                    Brand graphics at left chest and back.
                                </li>
                                <li>
                                    Straight hem.
                                </li>
                                <li>
                                    Shell: 100% nylon;<br>Lining: 100% polyester.
                                </li>
                                <li>
                                    Machine wash, tumble dry.
                                </li>
                                <li>
                                    Imported.
                                </li>
                                <li>
                                    <div>Product measurements were taken using size MD. Please note that
                                        measurements may vary by size.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- second tab-pane -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="single-product-desc">
                            <div class="studio-thumb">
                                <a href="#"><img class="mb-30" src="{{url('front/assets/img/stodio.jpg" alt="s')}}tudio-thumb"></a>
                                <h6 class="mb-2">Reference <small>demo_1</small> </h6>
                                <h6>In stock <small>300 Items</small> </h6>
                                <h3>Data sheet</h3>
                            </div>
                            <div class="product-features">
                                <ul>
                                    <li><span>Compositions</span></li>
                                    <li><span>Cotton</span></li>
                                    <li><span>Paper Type</span></li>
                                    <li><span>Doted</span></li>
                                    <li><span>Color</span></li>
                                    <li><span>Black</span></li>
                                    <li><span>Size</span></li>
                                    <li><span>L</span></li>
                                    <li><span>Frame Size</span></li>
                                    <li><span>40x60cm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- third tab-pane -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="single-product-desc">
                            <div class="grade-content">
                                <span class="grade">Grade </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <h6 class="sub-title">test</h6>
                                <p>23/09/2020</p>
                                <h4 class="title">test</h4>
                                <p>test</p>
                            </div>
                            <hr class="hr">
                            <div class="grade-content">
                                <span class="grade">Grade </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <h6 class="sub-title">Hastheme</h6>
                                <p>23/09/2020</p>
                                <h4 class="title">demo</h4>
                                <p>ok !</p>
                                <a href="#" class="btn theme-btn--dark3 theme-btn--dark3-sm btn--sm rounded-5 mt-15"
                                    data-toggle="modal" data-target="#exampleModalCenter">Write your review !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
<!-- new arrival section start -->
<section class="theme3 bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">You might also like</h2>
                    <p class="text mt-10">Add Related products to weekly line up
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="product-slider-init slick-nav">
                    @foreach ($catwithp as $catwithp)
                        @foreach ($catwithp->products as $item)
                            
                        
                  
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="{{url('productdetail/'.$item->id)}}">
                                            <img class="first-img" src="{{url('upload/'.$item->product_image)}}" style="height: 360px; width: 360px;" alt="thumbnail">
                                            {{-- <img class="second-img" src="{{url('front/assets/img/new-products/1.1.j')}}pg"
                                                alt="thumbnail"> --}}
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
                                            <h3 class="title"><a href="{{url('productdetail/'.$item->id)}}">{{$item->product_name}}</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">Rs. {{$item->product_price}}/-</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- new arrival section end -->
<!-- new arrival section start -->
<section class="theme3 bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">other products </h2>
                    <p class="text mt-10">16 other products in the same category: </p>
                </div>
            </div>
            <div class="col-12">
                <div class="product-slider-init slick-nav">
                    <!-- slider-item end -->
                    @foreach ($otherproducts as $otherproducts)
                        
                    
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="{{url('productdetail/'.$otherproducts->id)}}
                                            ">
                                            <img class="first-img" src="{{url('upload/'.$otherproducts->product_image)}}" style="height: 360px; width: 360px;  "  alt="thumbnail">
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
                                            <h3 class="title"><a href="{{url('productdetail/'.$otherproducts->id)}}">{{$otherproducts->product_name}}</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">Rs. {{$otherproducts->product_price}}/-</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
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
        </div>
    </div>
</section>
<!-- new arrival section end -->
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
                                    <a href="javascript:void(0)"> <img src="{{url('front/assets/img/hot-deals/thumb/4.jpg')}}"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="{{url('front/assets/img/hot-deals/thumb/5.jpg')}}"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="{{url('front/assets/img/hot-deals/thumb/6.jpg')}}"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="{{url('front/assets/img/hot-deals/thumb/7.jpg')}}"
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
                                    <span class="star-on"><i class="ion-ios-star"></i> </span>
                                    <span class="star-on"><i class="ion-ios-star"></i> </span>
                                    <span class="star-on"><i class="ion-ios-star"></i> </span>
                                    <span class="star-on"><i class="ion-ios-star"></i> </span>
                                    <span class="star-on"><i class="ion-ios-star"></i> </span>
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
                                                    class="fas fa-chevron-up"></i>4
                                                </button>
                                            <button class="count-btn decrement"><i
                                                    class="fas fa-chevron-down"></i>
                                                </button>
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
                                <img src="{{url('front/assets/img/hot-deals/thumb/4.')}}2x.jpg" alt="img">
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

<!-- third modal -->
<div class="modal fade show style4" id="exampleModalCenter" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-block">
                <h5 class="modal-title bg-dark text-white">Write your review</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="modal-thumb">
                            <img src="{{url('/upload/'.$as->product_image)}}" style="height: 300px;" alt="modal-thumb">
                            <h3 class="title">Originals Windbreaker Winter Jacket</h3>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="modal-form">
                            <h3 class="title">Write your review</h3>
                            <div class="star-content pb-3">
                                <span class="quality mr-2">Quality</span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                                <span class="star-on"><i class="ion-ios-star"></i> </span>
                            </div>

                            <form>
                                <div class="form-group">
                                    <label class="title" for="text-filed113">Title for your review <sup
                                            class="required">*</sup></label>
                                    <input type="text" class="form-control" id="text-filed113">
                                </div>
                                <div class="form-group">
                                    <label for="text-filed21">Your review <sup class="required">*</sup></label>
                                    <textarea class="form-control textarea" id="text-filed21" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text-filed031">Your name <sup class="required">*</sup></label>
                                    <input type="text" class="form-control" id="text-filed031">
                                </div>
                            </form>
                            <div class="form-group mt-3">
                                <span class="required"><sup>*</sup> Required fields</span>
                                <div class="text-right">
                                    <button type="button"
                                        class="btn theme-btn--dark3 theme-btn--dark3-sm btn--sm rounded-5">Send</button>
                                    <span class="d-inline-block mx-2 or">or </span>
                                    <button type="button"
                                        class="btn theme-btn--dark3 theme-btn--dark3-sm btn--sm rounded-5"
                                        data-dismiss="modal">cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection