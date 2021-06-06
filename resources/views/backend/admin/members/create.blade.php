@extends('backend.admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h2 class="mt-4">Members</h2>
    <ol class="breadcrumb mb-4 rounded-0">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.member')}}">All Member</a></li>
        <li class="breadcrumb-item active">Add New</li>
    </ol>

        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Add New Member
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin.member.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="referId">Refer By  <span class="text-danger">&nbsp;</span></label>
                                         <select name="refer_id" class="form-control selectpicker" data-live-search="true" id="referId" >
                                            <option value="" selected>-- Select Refer Member --</option>
                                            @if($allUser->isNotEmpty())
                                                @foreach($allUser as $item)
                                                    <option value="{{$item->user_id}}">{{$item->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" required>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                        <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control @error('mobile') is-invalid @enderror" id="mobile" required>

                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="eMail">E-Maile <span class="text-danger">*</span></label>
                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="eMail" required>

                                       @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="country">Country <span class="text-danger">&nbsp;</span></label>
                                        <input type="text" name="country" value="{{ old('country') }}" class="form-control" id="country">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="division">Division <span class="text-danger">&nbsp;</span></label>
                                        <input type="text" name="division" value="{{ old('division') }}" class="form-control" id="division">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="city">City <span class="text-danger">&nbsp;</span></label>
                                         <input type="text" name="city" value="{{ old('city') }}" class="form-control" id="city">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="address">Address <span class="text-danger">&nbsp;</span></label>
                                        <textarea name="address" class="form-control" id="address" rows="4" style="height: 7.75rem;">{{ old('address') }}</textarea>
                                    </div>


                                    <div class="form-group">
                                        <label for="photo">Profile Photo <span class="text-danger"></span> </label>
                                        <input type="file" name="photo" class="form-control" id="photo">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="username">Username <span class="text-danger">*</span></label>
                                         <input type="text" name="username" value="{{ old('username') }}" class="form-control  @error('username') is-invalid @enderror" id="username">

                                         @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                         <label for="password" class="">Password <span class="text-danger">*</span></label>
                                         <input type="text" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                         <label for="passwordConform" class="">Confirm Password <span class="text-danger">*</span></label>
                                         <input type="password" name="confirm_password" class="form-control" id="passwordConform">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">Add Member</button>
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
