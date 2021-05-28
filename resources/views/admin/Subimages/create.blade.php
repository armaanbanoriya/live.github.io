@extends('../admin.master')
@section('title','Add Product')


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
                     <h3 class="card-title">Add Products</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('subimages/save')}}" enctype="multipart/form-data">
                     @csrf  
                     <div class="card-body">                       
                        
                       
                        <div class="form-group">
                           <label for="exampleInputFile">Upload Images</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="image" class="custom-file-input"   >
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
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
@endsection
