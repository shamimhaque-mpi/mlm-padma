@extends('backend.admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Products</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.product.create')}}">Add New</a></li>
            <li class="breadcrumb-item active">All Product</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-table mr-1"></i>
                        All Product
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th width="20">SL</th>
                                    <th>Photo</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Subcategory</th>
                                    <th>P.Price (Tk)</th>
                                    <th>R.Price (Tk)</th>
                                    <th>Point</th>
                                    <th width="50">Position</th>
                                    <th width="50">Status</th>
                                    <th width="100">Action</th>
                                </tr>
                                </thead>
                                @if($allProduct->isNotEmpty())
                                    @foreach($allProduct as $key => $row)
                                        <tr>
                                            <td class="text-center">{{(++$key)}}</td>
                                            <td class="p-0 text-center">
                                                <img width="80" height="80" src="{{asset($row->image['small'])}}" alt="">
                                            </td>
                                             <td>{{$row->product_name}}</td>
                                            <td>{{$row->category['category_name']}}</td>
                                            <td>{{$row->subcategory['subcategory_name']}}</td>
                                            <td>{{$row->purchase_price}}</td>
                                            <td>{{$row->regular_price}}</td>
                                            <td>{{$row->point}}</td>
                                            <td>{{$row->position}}</td>
                                            <td>{{(ucfirst($row->status))}}</td>
                                            <td class="text-center">
                                                <a title="View" href="{{route('admin.product.show', $row->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>

                                                <a title="Edit" href="{{route('admin.product.edit', $row->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i></a>

                                                <a title="Delete" href="{{route('admin.product.destroy', $row->id)}}" onclick="return confirm('Are you sure your want to delete this data..?')" class="btn btn-sm btn-danger"> <i class="fa fa-trash-o"></i></a>
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
