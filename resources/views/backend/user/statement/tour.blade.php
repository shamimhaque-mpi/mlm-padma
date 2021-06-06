@extends('backend.user.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Tour</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Statement</li>
            <li class="breadcrumb-item active">Tour</li>
        </ol>

        <div class="row">
            <div class="col-12">
                
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
