@extends('backend.user.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Change Password</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('user.profile')}}">My Profile</a></li>
            <li class="breadcrumb-item active">Change Password</li>
        </ol>

        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4 rounded-0">

                    <div class="card-body">
                        <form action="{{route('user.profile.password')}}" method="POST">
                            @csrf

                            <div class="row">
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="password">New Password <span class="text-danger">*</span> </label>
		                                <input type="text" name="password" class="form-control" id="password" autocomplete="off" required>
		                            </div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="form-group">
		                                <label for="re_password">Re-Password <span class="text-danger">*</span> </label>
		                                <input type="text" name="re_password" class="form-control" id="re_password" autocomplete="off" required>
		                            </div>
                            	</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('public/backend/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{asset('public/backend/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

    <script>
        $('.selectpicker').selectpicker();
    </script>
@endpush
