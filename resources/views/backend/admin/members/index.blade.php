@extends('backend.admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Members</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.member.create')}}">Add New</a></li>
            <li class="breadcrumb-item active">All Members</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-table mr-1"></i>
                        All Members
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th width="20">SL</th>
                                    <th>Name</th>
                                    <th width="60">Photo</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th width="160">Action</th>
                                </tr>
                                </thead>
	                                @foreach($results as $key=> $row)
                                	<tr>
                                		<td>{{ $key+1 }}</td>
                                		<td>{{ $row->name }}</td>
                                        <td class="p-0 text-center">
                                            <img src="{{ asset($row->photo) }}" alt="" width="60" height="60">
                                        </td>
                                		<td>{{ $row->mobiel }}</td>
                                        <td>{{ $row->email }}</td>
                                		<td>{{ $row->address }}</td>
                                		<td class="text-center">
                                			<div class="btn-group">
	                                			<a href="{{ route('admin.member.tree', $row->user_id) }}" class="btn btn-sm btn-success">Tree</a>
	                                			<a href="{{ route('admin.member.show', $row->user_id) }}" class="btn btn-sm btn-info">Profile</a>
                                			</div>

                                            <a title="Edit" href="{{route('admin.member.edit', $row->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                                            <a title="Delete" href="{{route('admin.member.destroy', $row->id)}}" onclick="return confirm('Are you sure your want to delete this data..?')" class="btn btn-sm btn-danger"> <i class="fa fa-trash-o"></i></a>
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
