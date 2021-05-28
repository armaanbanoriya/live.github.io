@extends('admin.master')
@section('title','Category Homepage');

@section('content')

<div class="container-fluid">
  <div class="row">             
     <div class="col-md-12">               
          @if(session('message'))
              <p class ="alert alert-success">
            {{session('message')}}
              </p>
          @endif
                 <br>
           <div class="card card-success">
              <div class="card-header">
                 <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


<form class="row g-3" method="post" action="{{url('category/update')}}"  enctype="multipart/form-data" >
    @csrf

    <div class="card-body">
    <input type="hidden" name="id" value="{{$data->id}}">

    <div class="form-group"> 
      <label for="name" class="form-label">Name</label>
      <input type="name" name="name" value="{{$data->name}}" class="form-control" id="name">
    </div>
    <div class="form-group">
      <label for="description" class="form-label">Description</label>
      <input type="text" name="description" value="{{$data->description}}" class="form-control" id="description">
    </div>
    <div class="form-group">
      <label for="image" class="form-label">Upload Image</label>
      <input type="file" name="image"  value="{{$data->image}}" class="form-control" id="image" >
    </div>
   
    <div class="form-group">
      <button type="submit" name="" class="btn btn-primary">UPDATE</button>
    </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
@endsection