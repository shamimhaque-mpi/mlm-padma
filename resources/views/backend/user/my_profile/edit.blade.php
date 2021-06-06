@extends('backend.user.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Edit Profile</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('user.profile')}}">My Profile</a></li>
            <li class="breadcrumb-item active">Edit Profile</li>
        </ol>

        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Id Information
                    </div>

                    <div class="card-body">
                        <form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            	<div class="col-md-2 mb-3">
                            		<img src="{{ asset($user->image) }}" class="img-fluid" alt="">
                            	</div>
                            </div>
                            <div class="row">
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="name">Username <span class="text-danger">*</span> </label>
		                                <input type="text" value="{{ $user->username }}" class="form-control" id="username" readonly="true">
		                            </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="name">Full Name <span class="text-danger">*</span> </label>
		                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="full_name" autocomplete="off" required>
		                            </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="name">Mobile <span class="text-danger">*</span> </label>
		                                <input type="text" name="mobile" value="{{ $user->mobile }}" class="form-control" id="mobile" autocomplete="off" required>
		                            </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="name">E-Maile <span class="text-danger">*</span> </label>
		                                <input type="email" value="{{ $user->email }}" class="form-control" id="email" readonly="true">
		                            </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="name">Country <span class="text-danger">*</span> </label>
		                                <input type="text" name="country" value="{{ $user->country }}" class="form-control" id="country" autocomplete="off" required>
		                            </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="name">Division <span class="text-danger">*</span> </label>
		                                <input type="text" name="division" value="{{ $user->division }}" class="form-control" id="division" autocomplete="off" required>
		                            </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="name">City <span class="text-danger">*</span> </label>
		                                <input type="text" name="city" value="{{ $user->city }}" class="form-control" id="city" autocomplete="off" required>
		                            </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="name">Address <span class="text-danger">*</span> </label>
		                                <input type="text" name="address" value="{{ $user->address }}" class="form-control" id="address" autocomplete="off" required>
		                            </div>
                            	</div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Profile Picture </label>
                                        <input type="file" name="image" class="form-control" id="image" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('public/backend/plugins/bootstrap-select/css/bootstrap-select.min.css')}}"
          rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{asset('public/backend/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

    <script>
        $('.selectpicker').selectpicker();
    </script>
@endpush
