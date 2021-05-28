@extends('front.master')
@section('title','Checkout')

@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">check out</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">check out</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="check-out-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    1 Personal Information
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <form method="post" action="{{url('place_order')}}" class="personal-information">
                                   
                                   @csrf

                                    
                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label">
                                            Name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="name" name="" value="{{Auth::User()->name}}" class="form-control">
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" name="email" id="email" value="{{Auth::User()->email}}" class="form-control">
                                        </div>
                                    </div>

                                   

                                   
                                    <div class="form-group row">
                                        <div class="col-md-3"></div>
                                        
                                       
                                    </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    2 Shipping Addresses
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="checkout-inner border-0">
                                    <div class="checkout-address p-0">
                                        <p>
                                            The selected address will be used both as your personal address (for
                                            invoice) and as your delivery address.
                                        </p>
                                    </div>
                                    <div class="check-out-content">
                                          
                                            <div class="form-group row">
                                                <label class="col-md-3" for="Name2">Name</label>
                                                <div class="col-md-6">
                                                    <input class="form-control"  id="Name2" name="name"
                                                        type="text" required="">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="col-md-3" for="address1">Address</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="address1" name="address"
                                                        type="text" required="">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="col-md-3" for="city">City</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="city" name="city" type="text"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">State</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="state">
                                                        <option>-- please choose --</option>
                                                        <option value="1">AA</option>
                                                        <option value="2">AE</option>
                                                        <option value="3">AP</option>
                                                        <option value="4">Alabama</option>
                                                        <option value="5">Alaska</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="zip">Pincode/Postal Code</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="zip" name="pincode" type="text"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">Country</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="country">
                                                        <option>-- please choose --</option>
                                                        <option>United States</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="phone">Phone</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" name="phone" id="phone" type="text" required="">
                                                </div>
                                               
                                            </div>
                                           
                                            
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>3</span> Payment
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body pt-0">
                                <div class="custom-radio mb-4">
                                    <input type="radio" id="test5" name="radio-group">
                                    <label for="test5">Pay by Check</label>
                                </div>
                               
                                <div class="custom-radio mb-4">
                                    
                                    <input type="radio" name="payment_method" value="Paytm Gateway" id="test6" class="paytm" >
                                    <label for="test6">Pay by Paytm Gateway</label>
                                 
                                </div>
                                <div class="custom-radio mb-4">
                                    
                                    <input type="radio" name="payment_method" value="Pay by Paypal Gateway" id="test6" class="paypal" >
                                    <label for="test6">Pay by Paypal Gateway</label>
                                 
                                </div>
                                <div class="custom-radio mb-4">
                                    
                                    <input type="radio" name="payment_method" value="Pay by Razorpay Gateway" id="test6" class="razorpay" >
                                    <label for="test6">Pay by Razorpay Gateway</label>
                                 
                                </div>
                                <div class="custom-radio mb-4">
                                    <input type="radio" value="Cash on Delivery" name="payment_method"  id="test7" class="cod">
                                    <label for="test7">Cash on Delivery</label>
                                </div>
                                <div class="filter-check-box mb-4">
                                    <input type="checkbox" id="20828" required="">
                                    <label class="checkout" for="20828">I agree to the terms and Conditions</label>
                                </div>

                              
                            </div>
                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <ul class="list-group cart-summary rounded-0">
                    <h3 class="title mb-30 pb-25 text-capitalize">Order Summary</h3>
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
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$cart->product_quantity}}</li>
                            
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
                        <input type="hidden" name="grand_total" value="<?php echo $total_amount ?>" id="">
                    </li>
                    <li class="list-group-item text-center">

                   
                   <button type="submit" class="btn theme-btn--dark1 btn--md"
                   onclick="return select_payment_method();">Place Order</button>
                
                     
                   
                </li>
               

                </ul>
            </form>
                   
                <div class="delivery-info mt-20">
                    <ul>
                        <li>
                            <img src="assets/img/icon/10.png" alt="icon"> Security policy (edit with Customer
                            reassurance module)
                        </li>
                        <li>
                            <img src="assets/img/icon/11.png" alt="icon"> Delivery policy (edit with Customer
                            reassurance module)
                        </li>
                        <li class="mb-0">
                            <img src="assets/img/icon/12.png" alt="icon"> Return policy (edit with Customer
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