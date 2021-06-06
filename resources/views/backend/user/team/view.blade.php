@extends('backend.user.layouts.master')

@section('content')
<div class="container-fluid">
    <h2 class="mt-4">Member Profile</h2>
    <ol class="breadcrumb mb-4 rounded-0">
        <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('user.team.all')}}">My Team</a></li>
        <li class="breadcrumb-item"><a href="{{route('user.team.add')}}">All Member</a></li>
        <li class="breadcrumb-item active">Member Profile</li>
    </ol>
    <div class="row justify-content-center">
        <div class="card col-md-8 pt-3 pb-3">
            <div class="profile">
                <img src="{{ asset($user->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Username</th>
                            <td>{{ $user->username }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>User Id</th>
                            <td>{{ $user->user_id }}</td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td>{{ $user->mobile }}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>{{ $user->country }}</td>
                        </tr>
                        <tr>
                            <th>Division</th>
                            <td>{{ $user->division }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{ $user->city }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('styles')
    <style>
        .profile {
            float: left;
            border: 1px solid;
            width: 127px;
            margin: 12px;
        }
    </style>
@endpush