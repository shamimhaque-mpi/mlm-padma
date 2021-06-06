@extends('backend.admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">My Profile</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.profile')}}">View Profile</a></li>
            <li class="breadcrumb-item active">Change Password</li>
        </ol>

        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4 rounded-0">

                    <div class="card-body">
                        <form action="{{route('admin.profile.password')}}" method="POST">
                            @csrf


                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-right">New Password <span class="text-danger">*</span></label>
                                <div class="col-md-5">
                                 <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" id="password" autocomplete="off" required>

                                  @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="re_password" class="col-md-3 col-form-label text-right">Re-Password <span class="text-danger">*</span></label>
                                <div class="col-md-5">
                                  <input type="text" name="re_password" class="form-control @error('password') is-invalid @enderror" id="re_password" autocomplete="off" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-8 text-right">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </div>
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
