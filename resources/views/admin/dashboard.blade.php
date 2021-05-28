@extends('admin.master')

@section('title','Dashboard')
@section('content')
<h3 style="text-align: center">Order Statics</h3>
<div class="row justify-content-center">

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner" style="text-align: center;">
            
              @php
             //    $b= DB::table('orders')->whereDate('created_at',today())->get();
              $b= DB::table('orders')->where('order_status','pending')->get();
              @endphp
  
            <h3>{{ $b->count() }}<sup style="font-size: 20px"></sup></h3>
  
            <p>Pending Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          
        </div>
      </div>
   
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner" style="text-align: center;">
              @php
                 $a= DB::table('orders')->orderby('id') ->get()->count();
              @endphp
            <h3>{{ $a }}</h3>
  
            <p>Total Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          
        </div>
      </div>
    
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner" style="text-align: center;">

            @php
               $c= DB::table('orders')->where('order_status','complete')->get();

            @endphp

          <h3>{{ $c->count() }}</h3>

          <p>Order Completed</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        
      </div>
    </div>
  </div>
  <br>

  {{----------------------- Payment Methods --------------------------------------}}

  <h3 style="text-align: center">Payment Method</h3>
  <div class="row justify-content-center">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Cash On Delivery</span>
          @php
              $cash= DB::table('orders')->where('payment_method','Cash on Delivery')->get();
          @endphp
          <span class="info-box-number">
            {{ $cash->count() }}
            
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

        <div class="info-box-content" >
          <span class="info-box-text">Paytm Gateway</span>
          @php
          $cashpay= DB::table('orders')->where('payment_method','Paytm Gateway')->get();
      @endphp
          <span class="info-box-number">{{ $cashpay->count() }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

   
    <!-- /.col -->
  </div>


@endsection