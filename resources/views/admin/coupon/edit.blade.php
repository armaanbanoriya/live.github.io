@extends('../admin.master')
@section('title','Add Coupons')

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
                   <h3 class="card-title">Edit Coupons</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{url('coupon/update')}}" enctype="multipart/form-data">
                   @csrf 
                   <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <label for="exampleInputEmail1">Coupon Code</label>
                        <input type="text" name="coupon_code" value="{{$data->coupon_code}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Coupon code">
                        @error('coupon_code')
                        <span class="alert alert-danger">
                        {{$message}}
                        </span>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Amount</label>
                        <input type="text" name="amount" value="{{$data->amount}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount">
                        @error('amount')
                        <span class="alert alert-danger">
                        {{$message}}
                        </span>
                        @enderror
                     </div>
                       
                      
                      <label for="amount_type">Amount Type</label>
                      <select class="form-control" name="amount_type"> value="{{$data->amount_type}}" 
                      <option>Select Amount</option>                    
                      <option value="Percentage"
                      @if ($data->amount_type=='Percentage')
                          selected
                      @endif>Percentage</option>
                      <option value="Fixed"
                      @if ($data->amount_type=='Fixed')
                      selected                          
                      @endif >Fixed</option>
                      </select>
                  
                       
                     
                      <div class="form-group">
                         <label for="exampleInputPassword1">Expiry Date</label>
                         <input type="date" name="expiry_date" value="{{$data->expiry_date}}"  class="form-control" id="exampleInputPassword1" placeholder="Select Date">
                         @error('expiry_date')
                         <span class="alert alert-danger">
                         {{$message}}
                         </span>
                         @enderror
                      </div>                  
                       <!-- /.card-body -->
                      <div class="card-footer">
                         <button type="submit" class="btn btn-primary">UPDATE</button>
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