@extends('backend.admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">My Profile</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.profile')}}">View Profile</a></li>
            <li class="breadcrumb-item active">Edit Profile</li>
        </ol>

        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Edit Information
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-right">Username <span class="text-danger">*</span></label>
                                <div class="col-md-5">
                                  <input type="text" class="form-control" id="name" value="{{ $info->username }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fullName" class="col-md-3 col-form-label text-right">Full Name <span class="text-danger">*</span></label>
                                <div class="col-md-5">
                                  <input type="text" name="name" class="form-control" id="fullName" value="{{ $info->name }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-md-3 col-form-label text-right">Mobile <span class="text-danger">*</span></label>
                                <div class="col-md-5">
                                  <input type="text" name="mobile" class="form-control" id="mobile" value="{{ $info->mobile }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eMail" class="col-md-3 col-form-label text-right">E-Maile <span class="text-danger">*</span></label>
                                <div class="col-md-5">
                                  <input type="text" name="email" class="form-control" id="eMail" value="{{ $info->email }}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="address" class="col-md-3 col-form-label text-right">Address <span class="text-danger">&nbsp;</span></label>
                                <div class="col-md-5">
                                  <textarea name="address" class="form-control" id="address" rows="3">{{$info->address}}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="photo" class="col-md-3 col-form-label text-right">Profile Photo <span class="text-danger"></span> </label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                        <input type="file" name="photo" class="form-control" id="brandLogo">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                                <img src="{{asset($info->photo)}}" width="30" height="35" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="old_photo" value="{{$info->photo}}" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 text-right">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
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
    <link rel="stylesheet" href="{{asset('public/backend/plugins/bootstrap-select/css/bootstrap-select.min.css')}}"
          rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{asset('public/backend/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

    <script>
        $('.selectpicker').selectpicker();
    </script>
@endpush
