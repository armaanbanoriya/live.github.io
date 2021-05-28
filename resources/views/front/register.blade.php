@extends('front.master')

@section('title','Register')

@section('content')

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">Register</h2>
                </div>
            </div> 
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="register pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25">Create an account</h3>
                {{-- Display message Start --}}
            @if (session()->has('message'))
            <div class="alert alert-success ">{{session()->get('message')}}</div>
            @elseif (session()->has('error'))            
            <div class="alert alert-danger ">{{session()->get('error')}}</div>
            @endif
            {{-- Display message end --}}
                <div class="log-in-form">
                   
                    <form id="registerForm" method="POST" action="{{url('/registerusers')}}">
                        @csrf
                        <div class="order-asguest theme1 mb-3">
                            <span>Already have an account?</span>
                            <a class="text-muted hover-color" href="{{url('signin')}}">Log in instead!</a>
                        </div>
                                               
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" id="name" class="form-control " name="name"  autocomplete="name" autofocus>

                               
                            </div>
                        </div> 
                       
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control " name="email">

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Password" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="password" id="password" class="form-control" name="password"  autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" style="color: red"  role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
                                    <div class="input-group-prepend">
                                        <button type="button"                                          class="input-group-text theme-btn--dark1 btn--md show-password">show</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label">Confirm Password</label>
                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">
                        <input type="password" id="confirm_password" class="form-control" 
                        name="password_confirmation"                      autocomplete="new-password">                                 
                                </div>
                            </div>
                        </div> 

                       
                            <div class="col-12">

                                <div class="sign-btn text-right">
                                    <button type="submit" class="btn theme-btn--dark1 btn--md">
                                      Register
                                    </button>                              
                             
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
@endsection