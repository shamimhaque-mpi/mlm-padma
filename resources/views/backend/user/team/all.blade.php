@extends('backend.user.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">All Team Member</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('user.team.add')}}">Add New</a></li>
            <li class="breadcrumb-item active">All Member</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-table mr-1"></i>
                        All Member
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
	                                <tr>
	                                    <th width="20">SL</th>
	                                    <th>Name</th>
                                        <th>Pic</th>
	                                    <th>User Id</th>
	                                    <th>Mobile</th>
	                                    <th>E-mail</th>
	                                    <th>Country</th>
	                                    <th>Action</th>
	                                </tr>
                                </thead>
                                @if($all_users->isNotEmpty())
                                    @foreach($all_users as $key => $row)
                                        <tr>
                                            <td class="text-center">{{(++$key)}}</td>
                                            <td>{{$row->name}}</td>
                                            <td><img src="{{asset($row->photo)}}" alt="" height="30"></td>
                                            <td>{{$row->user_id}}</td>
                                            <td>{{$row->mobile}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->country}}</td>
                                            <td class="text-center">
                                                <a title="View User Profile" href="{{ route('user.team.view', $row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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
