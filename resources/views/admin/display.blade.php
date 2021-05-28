@extends('admin.master')
@section('title','View Categories')
@section('columnheader')
<button class="btn btn-primary" type="submit" href="{{url('category/add')}}" >Add Categories</button>
@endsection
@section('content')

<div class="card">
    {{-- message start --}}
@if(session('message'))

<p class ="alert alert-success">
    {{session('message')}}
</p> @endif
{{-- message end --}}
    <div class="card-header">
      <h3 class="card-title"> User <span>Orders</span> </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
              
                <th>Action</th>
            </tr>
            
        </thead>
   
        <tbody>
            @foreach ($data as $a)
            <tr> 
                <td>{{ $a->id }}</td>                  
                <td>{{ $a->name }}</td>
                <td>{{ $a->description }}</td>
                <td><img src="{{ url('/upload/'.$a->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
                
                <td>
                    <a class="btn btn-primary" href="{{ 'view/'.$a->id }}">View</a>
                    <a class="btn btn-success" href="{{ 'edit/'.$a->id }}">Edit</a>
                    <a class="btn btn-danger" href="{{ 'delete/'.$a->id }}">Delete</a>
                </td>


            </tr>                
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
              
                <th>Action</th>
            </tr>
        </tfoot>
        
       
    </table>
</div>
</div>

@endsection