@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Sponsor</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('sponsor.create')}}">Add New</a></li>
            <li class="breadcrumb-item active">All Sponsor</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-table mr-1"></i>
                        All Sponsor
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th width="20">SL</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th width="50">Logo</th>
                                    <th width="50">Position</th>
                                    <th width="50">Status</th>
                                    <th width="100">Action</th>
                                </tr>
                                </thead>
                                @if($allSponsor->isNotEmpty())
                                    @foreach($allSponsor as $key => $row)
                                        <tr>
                                            <td class="text-center">{{(++$key)}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->mobile}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>
                                                <a target="_blank" href="{{$row->site_link}}">
                                                    <img width="50" src="{{asset($row->logo)}}" alt="">
                                                </a>
                                            </td>
                                            <td>{{$row->position}}</td>
                                            <td>{{(ucfirst($row->status))}}</td>
                                            <td class="text-center">
                                                <a title="View" href="{{route('sponsor.show', $row->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>

                                                <a title="Edit" href="{{route('sponsor.edit', $row->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                                                <a title="Delete" href="{{route('sponsor.destroy', $row->id)}}" onclick="return confirm('Are you sure your want to delete this data..?')" class="btn btn-sm btn-danger"> <i class="fa fa-trash-o"></i></a>
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
