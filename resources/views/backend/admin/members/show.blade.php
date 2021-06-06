@extends('backend.admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h2 class="mt-4">Members</h2>
    <ol class="breadcrumb mb-4 rounded-0">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.member')}}">All Member</a></li>
        <li class="breadcrumb-item active">View Profile</li>
    </ol>


    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4 rounded-0">
                <div class="card-header">
                    <i class="fa fa-plus"></i>&nbsp;
                    Profile Information
                </div>

                <div class="card-body">

					<table class="table table-bordered">
						<tr>
							<th width="20%">Username</th>
							<td>{{ $info->username }}</td>
							<td rowspan="3" width="200">
								<img src="{{ asset($info->photo) }}" class="img-fluid" alt="">
							</td>
						</tr>
						<tr>
							<th>Name</th>
							<td>{{ $info->name }}</td>
						</tr>
						<tr>
							<th>Mobile</th>
							<td>{{ $info->mobile }}</td>
						</tr>
						<tr>
							<th>E-mail</th>
							<td colspan="2">{{ $info->email }}</td>
						</tr>
						<tr>
							<th>Country</th>
							<td colspan="2">{{ $info->country }}</td>
						</tr>
						<tr>
							<th>Division</th>
							<td colspan="2">{{ $info->division }}</td>
						</tr>
						<tr>
							<th>City</th>
							<td colspan="2">{{ $info->city }}</td>
						</tr>
						<tr>
							<th>Address</th>
							<td colspan="2">{{ $info->address }}</td>
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

@push('scripts')

@endpush
