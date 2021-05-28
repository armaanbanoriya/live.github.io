@extends('front.master')

@section('title','Cart')

@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">cart</h2>
                </div>
            </div> 
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
@if(session('message'))

<p class ="alert alert-success" style="font-size: 20px;">
    {{session('message')}}
</p>
    
@endif

<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <h3 class="title mb-30 pb-25 text-capitalize">Your cart items</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">Product Image</th>
                                <th class="text-center" scope="col">Product Name</th>
                               
                                <th class="text-center" scope="col">Qty</th>
                                <th class="text-center" scope="col">Price</th>
                                <th class="text-center" scope="col">action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $cart)
                                
                            
                            <tr>
                                <th class="text-center" scope="row">
                                    <img src="{{url('/upload/'.$cart->product_image)}}" alt="img">
                                </th>
                                <td class="text-center">
                                    <span class="whish-title">{{$cart->product_name}}</span>
                                </td>
                               
                                <td class="text-center">
                                    <div class="product-count style">
                                        {{-- <input type="hidden" value="{{$cart->id}}"  id=""> --}}
                                        <div class="count d-flex justify-content-center">
                                            
                                            <input type="number" min="1" max="10" step="1" name="product_quantity" value="{{$cart->product_quantity}}">
                                            <div class="button-group" >
                                                <a href="{{url('cart/updatequantity/'.$cart->id.'/1')}}" class="count-btn increment">
                                                    <i class="fas fa-chevron-up"></i>
                                                </a>
                                                <a href="{{url('cart/updatequantity/'.$cart->id.'/-1')}}" class="count-btn increment">
                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                                {{-- <button class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></button>
                                                <button class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                       Rs. {{$cart->product_price*$cart->product_quantity}}
                                    </span></td>

                                <td class="text-center">
                                    <a href="{{url('cart/delete/')}}/{{$cart->id}}"> <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                                </td>
                               
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <h3 class="title mb-30 pb-25 text-capitalize">Order Summary</h3>
                <ul class="list-group cart-summary rounded-0">
                
                    <?php
                    $total_amount=0;
                    ?>
                    @foreach ($a as $cart)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                     
                          
                        
                        <ul class="items">
                           
                            <li>{{$cart->product_name}}</li>
                            <li>Quantity</li>
                            
                        </ul>
                        <ul class="items">
                           
                            <li>Rs. {{$cart->product_price}}/-</li>
                            <li> &nbsp;&nbsp; &nbsp; &nbsp;  {{$cart->product_quantity}}</li>
                            
                        </ul>
                        
                    </li>
                    <?php
                    $total_amount=$total_amount+($cart->product_price*$cart->product_quantity);
                    ?>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>Total Price</li>
                            <li>Taxes</li>
                        </ul>
                        <ul class="amount">
                            <li>Rs. <?php echo $total_amount ?>/-</li>
                            <li>Rs. 0/-</li>
                        </ul>
                        
                    </li>
                    <li class="list-group-item text-center">


               <div class="btncss">
                   @if (Auth::check())                   
                   <a href="{{url('checkout')}}" class=" btnext btnext3--dark1 btn--md">Checkout</a>
                   @else
                        <a href="{{url('signin')}}" class="btnext btnext3--dark1 btn--md">Checkout</a>
                    @endif
                </div>
                </li>

                </ul>

                <div class="delivery-info mt-20">
                    <ul>
                        <li>
                            <img src="{{url('front/assets/img/icon/10.png')}}" alt="icon"> Security policy (edit with Customer
                            reassurance module)
                        </li>
                        <li>
                            <img src="{{url('front/assets/img/icon/11.png')}}" alt="icon"> Delivery policy (edit with Customer
                            reassurance module)
                        </li>
                        <li class="mb-0">
                            <img src="{{url('front/assets/img/icon/12.png')}}" alt="icon"> Return policy (edit with Customer
                            reassurance module)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
    
@endsection

