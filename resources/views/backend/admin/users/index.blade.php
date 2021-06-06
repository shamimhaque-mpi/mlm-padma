@extends('backend.admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Users</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-table mr-1"></i>
                        All Users
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th width="20">SL</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th width="100">Action</th>
                                </tr>
                                </thead>
	                                @foreach($users as $key=>$user)
                                	<tr>
                                		<td>{{ $key+1 }}</td>
                                		<td><img src="{{ asset($user->image) }}" alt="" height="25"></td>
                                		<td>{{ $user->name }}</td>
                                		<td>{{ $user->mobiel }}</td>
                                		<td>{{ $user->email }}</td>
                                		<td>
                                			<div class="btn-group">
	                                			<a href="{{ route('admin.user.tree', $user->user_id) }}" class="btn btn-sm btn-success">Tree</a>
	                                			<a href="{{ route('admin.user.profile', $user->user_id) }}" class="btn btn-sm btn-info">Profile</a>
                                			</div>
                                		</td>
                                	</tr>
	                                @endforeach
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('styles')
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
