@extends('../admin.master')
@section('title','Show Products')
@section('content')
<h1>
<label>Product ID:</label>
{{$data->id}}</h1>

<h1>
<label>Category ID:</label>
{{$data->category_id}}</h1>

<h1>
<label>Product Name:</label>
{{$data->product_name}}</h1> 
<h1>
<label>Product Code:</label>
{{$data->product_code}}</h1>

<h1>
<label>Product Size:</label>
{{$data->product_size}}</h1>

<h1>
<label>Product Description:</label>
{{$data->product_description}}</h1>

<h1>
<label>Product Image:</label>
{{$data->product_image}}</h1>

<h1>
<label>Product Price:</label>
{{$data->product_price}}</h1>

<h1>
<label>Product Quantity:</label>
{{$data->product_quantity}}</h1>

@endsection