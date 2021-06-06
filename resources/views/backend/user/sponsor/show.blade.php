@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Posts</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('sponsor')}}">All Post</a></li>
            <li class="breadcrumb-item active">Preview</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-photo mr-1"></i>
                        Sponsor Preview
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th width="25%">Company name</th>
                                <td>{{$info->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$info->email}}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{$info->mobile}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$info->address}}</td>
                            </tr>
                            <tr>
                                <th>Site Link</th>
                                <td><a target="_blank" href="{{$info->site_link}}">{{$info->site_link}}</a></td>
                            </tr>
                            <tr>
                                <th>Logo</th>
                                <td><img width="60" src="{{asset($info->logo)}}" alt=""></td>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <td>{{$info->position}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ ucwords($info->status) }}</td>
                            </tr>
                        </table>
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
