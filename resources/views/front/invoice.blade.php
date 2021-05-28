@extends('front.master')

@section('title','Invoice')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="container">
      <div class="row">
        <div class="col-12">
        


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i> Bookshelf Ecommerce ,
                  <small class="float-right">Date: {{ $data->created_at }}</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                From
                <address>
                  <strong>Bookshelf, Inc.</strong><br>
                  15/101 Near St. Kolbe School<br>
                  Datia Road , Indergarh<br>
                  Phone: +917773007074<br>
                  Email: armaanbaonoriya@gmail.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                To
                <address>
                  <strong>{{ $data->name }}</strong><br>
                  {{ $data->address }}<br>
                  {{-- San Francisco, CA 94107<br>
                  Phone: (555) 539-1037<br>
                  Email: john.doe@example.com --}}
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>Invoice #007612</b><br>
                <br>
                <b>Order ID:</b> {{ $data->order_id }}<br>
                <b>Payment:</b> {{ $data->payment_method }}<br>
                {{-- <b>Account:</b> 968-34567 --}}
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>Qty</th>
                    <th>Product</th>
                    <th>Porduct Quantity</th>
                    <th>Coupon Discount</th>
                    <th>Subtotal</th>
                  </tr>
                  </thead>
                  <?php $total_amount=0 ?>
                  <?php $i=1 ?>
                  @foreach ($data->orderproducts as $item)
                  <tbody>
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->product_quantity }}</td>
                    <td>{{ $item->coupon_amount }}</td>
                    <td>Rs. {{ $item->product_price }}/-</td>
                  </tr>
                  </tbody>
                  <?php
                  $total_amount=$total_amount+($item->product_price*$item->product_quantity);
                  ?>           
                  @endforeach
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                {{-- <p class="lead">Payment Methods:</p>
                <img src="{{url('admin/dist/img/credit/visa.png')}}" alt="Visa">
                <img src="{{url('admin/dist/img/credit/mastercard.png')}}" alt="Mastercard">
                <img src="{{url('admin/dist/img/credit/american-express.png')}}" alt="American Express">
                <img src="{{url('admin/dist/img/credit/paypal2.png')}}" alt="Paypal">

                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                  plugg
                  dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p> --}}
              </div>
              <!-- /.col -->
              <div class="col-6">
                {{-- <p class="lead">Amount Due 2/22/2014</p> --}}
                
                    

                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Subtotal:</th>
                      <td>Rs. <?php echo $total_amount; ?>/-</td>
                    </tr>
                    <tr>
                      <th>Tax</th>
                      <td>Rs. 0/-</td>
                    </tr>
                    <tr>
                      <th>Shipping:</th>
                      <td>Rs. 0/-</td>
                    </tr>
                    <tr>
                      <th>Total:</th>
                      <td>Rs. <?php echo $total_amount; ?>/-</td>
                    </tr>
                  </table>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
           
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                  Payment
                </button>
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                  <i class="fas fa-download"></i> Generate PDF
                </button>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      
    
    </div>
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection