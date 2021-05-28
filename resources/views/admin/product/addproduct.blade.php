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
                  <form method="POST" action="{{url('product/save')}}" enctype="multipart/form-data">
                     @csrf 
                     <div class="card-body">

                         
                        
                        <label for="category_id">Category Name</label>
                        <select class="form-control" name="category_id">
                        <option>Select Category</option>
 
                        @foreach ($data as $a ) 
                        <option value="{{$a->id}}" >{{$a->name}}</option> 
                        @endforeach
                        </select>
                    
                         
                        <div class="form-group">
                           <label for="exampleInputEmail1">Product Name</label>
                           <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                           @error('product_name')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Product Code</label>
                           <input type="text" name="product_code" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Code">
                           @error('product_code')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Size</label>
                            <input type="text" name="product_size" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Size">
                            @error('product_size')
                            <span class="alert alert-danger">
                            {{$message}}
                            </span>
                            @enderror
                         </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Product Description</label>
                            <input type="text" name="product_description" class="form-control" id="exampleInputEmail1" placeholder="Enter Description">
                            @error('product_description')
                            <span class="alert alert-danger">
                            {{$message}}
                            </span>
                            @enderror
                         </div>
                         
 
 
                        <div class="form-group">
                           <label for="exampleInputFile">Product Image</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="product_image" class="custom-file-input"   >
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                            @error('product_price')
                            <span class="alert alert-danger">
                            {{$message}}
                            </span>
                            @enderror
                         </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Product Quantity</label>
                            <input type="text" name="product_quantity" class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity">
                            @error('product_quantity')
                            <span class="alert alert-danger">
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
@endsection
