@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Settings</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('setting')}}">Settings</a></li>
        </ol>

        <div class="col-12">
            <div class="card mb-4 rounded-0">
                <div class="card-header">
                    <i class="fa fa-plus"></i>&nbsp;
                    General Settings
                </div>

                <div class="card-body">

                <form action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="siteName" class="col-sm-2 col-form-label">Site Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="site_name" value="" class="form-control" id="siteName">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-7 text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')

@endpush

@push('scripts')

@endpush
