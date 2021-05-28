@extends('front.master')
@section('title','Reset Password')
@section('content')
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12"> 
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">Reset</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reset Your Password </li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="my-account pt-80 pb-80">
    <div class="container">
        <div class="row">  
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25"> Reset Your Password</h3>
                  {{-- Display message Start --}}
            @if (session()->has('message'))
            <div class="alert alert-success ">{{session()->get('message')}}</div>
            @elseif (session()->has('error'))            
            <div class="alert alert-danger ">{{session()->get('error')}}</div>
            @endif
         
                    <form method="POST" action="{{ url('/forgot-password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control " name="email" required>

                               
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                
                               {{-- <a class="btn theme-btn--dark1 btn--md" href="{{url('forgot-password')}}">Send Reset Password Link</a> --}}
                                <button type="submit" class="btn theme-btn--dark1 btn--md">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->


@endsection



