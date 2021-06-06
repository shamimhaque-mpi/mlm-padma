@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Sponsor</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('sponsor')}}">All Sponsor</a></li>
            <li class="breadcrumb-item active">Add New</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Add New Sponsor
                    </div>

                    <div class="card-body">

                        <form action="{{route('sponsor.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="position" value="{{$position}}">

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="sponsorName">Sponsor Name <span class="text-danger">*</span></label>
                                        <input type="text" name="sponsor_name" class="form-control" id="sponsorName"
                                               autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile <span class="text-danger"></span></label>
                                        <input type="text" name="mobile" class="form-control" id="mobile"
                                               autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger"></span></label>
                                        <input type="email" name="email" class="form-control" id="email"
                                               autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="siteLink">Site Link <span class="text-danger"></span></label>
                                        <input type="url" name="site_link" class="form-control" id="siteLink" placeholder="http://domain.com"
                                               autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="address">Address <span class="text-danger"></span></label>
                                        <textarea name="address" class="form-control" id="address" rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="enable" selected>Enable</option>
                                            <option value="disable">Disable</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="logo">Company Logo <span class="text-danger">&nbsp;</span></label>
                                        <input type="file" name="logo" class="form-control" id="logo"
                                               autocomplete="off">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <div class="form-group text-right" >
                                        <button type="submit" class="btn btn-primary">Add Sponsor</button>
                                    </div>
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

@endpush

@push('scripts')

@endpush
