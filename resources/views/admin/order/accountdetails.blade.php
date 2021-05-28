@extends('../admin.master')
@section('title','Account Details')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title"> View <span>Categories</span> </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Product Quantity</th> 
                <th>Product Price</th>
                <th>Product Image</th>
            </tr>
            
        </thead>
   
        <tbody>
            @foreach ($data->orderproducts as $orproduct)
            <tr>
                <td>{{$orproduct->product_id}}</td>               
                <td>{{$orproduct->product_name}}</td>
                <td>{{$orproduct->product_quantity}}</td>
                <td>Rs. {{$orproduct->product_price}}/-</td>
                <td> <img src="{{url('upload/'.$orproduct->product_image)}}" height="160px;" width="100px;"  alt=""> </td>
              
               
                
            </tr>        
            @endforeach 
        </tbody>
        <tfoot>
            <tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>User Email</th> 
                <th>Address</th>
                <th>Grand Total</th>

            </tr>
        </tfoot>
        
       
    </table>
</div>
</div>

@endsection