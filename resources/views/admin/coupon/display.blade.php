@extends('../admin.master')
@section('title','View Products')

@section('content')
@if(session('message'))

<p class ="alert alert-success">
    {{session('message')}}
</p>
    
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Coupon Code</th>
        <th scope="col">Amount</th>
        <th scope="col">Amount Type</th>
        <th scope="col">Expiry Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($data as $b )
    <tbody> 
        <tr>
          <th scope="row">{{$b->id}}</th>
          <td>{{$b->coupon_code}}</td>
          <td>{{$b->amount}}</td>
          <td>{{$b->amount_type}}</td> 
          <td>{{$b->expiry_date}}</td>            
          <td>
              <a class="btn btn-primary" href="{{'view/'.$b->id}}" >Show</a>
              <a class="btn btn-success" href="{{'edit/'.$b->id}}" >Edit</a>
              <a class="btn btn-danger" href="{{'delete/'.$b->id}}" >Delete</a>
          </td>
        </tr>
      
      </tbody>
        
    @endforeach
    
  </table>
@endsection