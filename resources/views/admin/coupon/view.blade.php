@extends('../admin.master')
@section('title','View Coupons')

@section('content')
<h1>
<label for="ID">ID</label>
{{$data->id}} </h1>
<h1>
<label>Coupon Code</label>
{{$data->coupon_code}} </h1>
<h1>
<label>Amount</label>
{{$data->amount}}</h1>
<h1>
<label>Amount Type</label>
{{$data->amount_type}}</h1>
<h1>
<label>Expiry Date</label>
{{$data->expiry_date}}</h1>




@endsection