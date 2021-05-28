@extends('../admin.master')
@section('title','Add Banners')

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
                   <h3 class="card-title">Add Banner</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{url('banner/save')}}" enctype="multipart/form-data">
                   @csrf 
                   <div class="card-body">
                    <div class="form-group">
                      <label for="name" class="form-label">Title</label>
                      <input type="text" name="title"  class="form-control"  placeholder="Enter Title" id="title">
                        @error('title')
                        <span style="color: red;">
                        {{$message}}
                        </span>
                        @enderror
                     </div> 
                     <div class="form-group">
                      <label for="headingtitle" class="form-label">Title(Heading)</label>
                      <input type="text" name="headingtitle" placeholder="Enter Title Heading" class="form-control" id="headingtitle">
                        @error('headingtitle')
                        <span style="color: red;">
                        {{$message}}
                        </span>
                        @enderror
                     </div>

                     <div class="form-group">
                      <label for="boldheadingtitle" class="form-label">Title(Bold Heading)</label>
                      <input type="text" name="boldheadingtitle" placeholder="Enter your Bold Heading Title" class="form-control" id="boldheadingtitle">
                        @error('boldheadingtitle')
                        <span style="color: red;">
                        {{$message}}
                        </span>
                        @enderror
                     </div>            

                      <div class="form-group">
                         <label for="url">URL: </label>
                         <input type="text" name="url" class="form-control" id="url" placeholder="Paste link here">
                         @error('url')
                         <span style="color: red;">
                         {{$message}}
                         </span>
                         @enderror
                      </div>         
                      
                      <div class="form-group">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" name="image" class="form-control" id="image" >
                        @error('image')
                        <span style="color: red;">
                        {{$message}}
                        </span>
                        @enderror
                     </div>         
                      
                      
                       <!-- /.card-body -->
                      <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                   </div>
                </form>               
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- /.card -->
</div>
@endsection