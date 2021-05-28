@extends('admin.master')
@section('title','Category Homepage')

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
                 <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

<form method="post" action="{{url('category/save')}}"  enctype="multipart/form-data" >
    @csrf
    <div class="card-body">
    <div class="form-group">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="name">
      @error('name')
      <span class="alert alert-danger">
      {{$message}}
      </span>
      @enderror 
    </div>
    <div class="form-group">
      <label for="description" class="form-label">Description</label>
      <input type="text" name="description" class="form-control" id="description">
      @error('description')
      <span class="alert alert-danger">
      {{$message}}
      </span>
      @enderror 
    </div>
    <div class="form-group">
      <label for="image" class="form-label">Upload Image</label>
      <input type="file" name="image" class="form-control" id="image" >
      @error('image')
      <span class="alert alert-danger">
      {{$message}}
      </span>
      @enderror 
    </div>
  
    <div class="form-group">
      <button type="submit" name="" class="btn btn-primary">Save</button>
    </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
@endsection