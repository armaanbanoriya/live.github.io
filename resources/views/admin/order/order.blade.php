@extends('admin.master')
@section('title','Placed Orders')

@section('content')


  
  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Users Orders</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>User Email</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Pincode</th>
          <th>Phone</th>
          <th>Payment Method</th>
          <th>Grand Total</th>
          <th>Order Details</th>
          <th>Receipt</th>
        
        </tr>
        </thead>
       
        <tbody>
          @foreach ($data as $orproduct) 
        <tr>
          <td>{{$orproduct->id}}</td>
                            
          <td>{{$orproduct->name}}</td>
          <td>{{$orproduct->useremail}}</td>
          <td>{{$orproduct->address}}</td>
          <td>{{$orproduct->city}}</td>
          <td>{{$orproduct->state}}</td>
          <td>{{$orproduct->pincode}}</td>
          <td>{{$orproduct->phone}}</td>
          <td>{{$orproduct->payment_method}}</td>
          <td>Rs.{{$orproduct->grand_total}}/-</td>
          <td>
            <a class="btn btn-primary" href="{{'accountdetails/'.$orproduct->id}}">View</a>
         
          </td>
          <td>
            <a class="btn btn-success" href="{{'invoice/'.$orproduct->id}}">View</a>
          </td>
  
        </tr>
        
        @endforeach
        </tbody>

        <tfoot>
        <tr>
          <th>ID</th>
         
          <th>User Name</th>
          <th>User Email</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Pincode</th>
          <th>Phone</th>
          <th>Payment Method</th>
          <th>Grand Total</th>
          <th>Order Details</th>
          <th>Receipt</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection