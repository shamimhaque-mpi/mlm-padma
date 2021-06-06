@extends('frontend.layout.master')
@section('content')

<!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('home')}}">home</a></li>
                            <li>login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    
    <!-- customer login start -->
    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>

						@if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
						  <h4 class="alert-heading">Success</h4>
						  <p>{{Session::get('success')}}</p>
						</div>
						@endif


                        <form method="post" action="{{route('register')}}">
                        	@csrf

                        	<p>   
                                <label>Refer ID <span class="text-danger">&nbsp;</span></label>
                                <input type="text" name="refer_id" value="{{old('refer_id')}}" class="@error('refer_id') is-invalid @enderror">

                                @error('refer_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>

                            <p>   
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{old('name')}}" class="@error('name') is-invalid @enderror">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </p>

                             <p>   
                                <label>Mobile <span class="text-danger">*</span></label>
                                <input type="tel" name="mobile" value="{{old('mobile')}}" class="@error('mobile') is-invalid @enderror">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </p>

                            <p>   
                                <label>Email address <span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{old('email')}}" class="@error('mobile') is-invalid @enderror">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </p>

                            <p>   
                                <label>Username <span class="text-danger">*</span></label>
                                <input type="text" name="username" value="{{old('username')}}" class="@error('username') is-invalid @enderror">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>

                            <p>   
                                <label>Passwords <span class="text-danger">*</span></label>
                                <input type="text" name="password" class="@error('password') is-invalid @enderror">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>   

                             <p>   
                                <label>Confirm Passwords <span class="text-danger">*</span></label>
                                <input type="password" name="confirm_password" class="@error('confirm_password') is-invalid @enderror">

                                @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </p>
                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->


                  <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form method="post" action="{{route('login')}}">

                        	@csrf

                            <p>   
                                <label>Username or email <span>*</span></label>
                                <input type="text" name="login" value="{{old('login')}}">

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </p>

                             <p>   
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </p> 

                            <div class="login_submit">
                               <a href="#">Lost your password?</a>
                                <label for="remember">
                                    <input id="remember" name="remember" type="checkbox" {{(!empty(old('remember')) ? 'checked' : '')}}>
                                    Remember me
                                </label>
                                <button type="submit">login</button>
                            </div>

                        </form>
                     </div>    
                </div>
                <!--login area start-->
            </div>
        </div>    
    </div>
    <!-- customer login end -->
@endsection


@push('scripts')

<!--map js code here-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script  src="https://www.google.com/jsapi"></script>

@endpush