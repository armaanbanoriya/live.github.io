@extends('../admin.master')
@section('title','Add Product')


@section('content')

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
                     <h3 class="card-title">Edit Products</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  
                  <form method="POST" action="{{url('product/update')}}" enctype="multipart/form-data">
                     @csrf 
                     
                     <div class="card-body">
                      <div class="row">
                        <input type="hidden" name="id" value="{{$data->id}}" >
                         <div class="col-md-12">
                        <div class="form-group">
                        <label for="category_id">Current Category</label>
                        <select class="form-control" name="category_id" >
                        <option>Select Category</option>

                        @foreach ($as as $a )
                        <option value="{{$a->id}}" {{$a->id==$data->category_id ? 'selected' : ''}} >{{$a->name}}</option> 
                        @endforeach
                        </select>
                        </div>
                        </div>
                         {{-- {!! F::select('category_id',as,null) !!} --}}
                         
                        </div> 
                        
                        <div class="form-group">
                           <label for="exampleInputEmail1">Product Name</label>
                           <input type="text" name="product_name" value="{{$data->product_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                           @error('product_name')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Product Code</label>
                           <input type="text" name="product_code" value="{{$data->product_code}}" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Code">
                           @error('product_code')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Size</label>
                            <input type="text" name="product_size" value="{{$data->product_size}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Size">
                            @error('product_size')
                            <span class="alert alert-danger">
                            {{$message}}
                            </span>
                            @enderror
                         </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Product Description</label>
                            <input type="text" name="product_description" value="{{$data->product_description}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Description">
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
                                 <input type="file" value="{{$data->product_image}}" name="product_image" class="custom-file-input"   >
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input type="text" name="product_price" value="{{$data->product_price}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                            @error('product_price')
                            <span class="alert alert-danger">
                            {{$message}}
                            </span>
                            @enderror
                         </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Product Quantity</label>
                            <input type="text" name="product_quantity" value="{{$data->product_quantity}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity">
                            @error('product_quantity')
                            <span class="alert alert-danger">
                            {{$message}}
                            </span>
                            @enderror
                         </div>
 
                
 
                        <!-- /.card-body -->
                        <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                  </form>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!-- /.card -->
@endsection
