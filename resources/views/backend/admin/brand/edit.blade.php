@extends('backend.admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Brand</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.brand')}}">Add New</a></li>
            <li class="breadcrumb-item active">Edit Brand</li>
        </ol>

        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Edit Brand
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin.brand.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$info->id}}">

                            <div class="form-group">
                                <label for="BrandName">Name <span class="text-danger">*</span></label>
                                <input type="text" name="brand_name" value="{{$info->brand_name}}" class="form-control" id="BrandName" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="brandLogo">Logo <span class="text-danger"></span> </label>
                                <div class="input-group">
                                    <input type="file" name="brand_logo" class="form-control" id="brandLogo">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                            <img src="{{asset($info->brand_logo)}}" width="30" height="35" alt="">
                                        </span>
                                    </div>
                                </div>
                                <input type="hidden" name="old_brand_logo" value="{{$info->brand_logo}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="position">Position <span class="text-danger">*</span></label>
                                <input type="text" name="position" value="{{$info->position}}" class="form-control" id="position" autocomplete="off" required>
                            </div>



                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-xl-6">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-list"></i>&nbsp;
                        All Brand
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <tr>
                                <th width="50">SL</th>
                                <th width="50">Logo</th>
                                <th>Name</th>
                                <th width="50">Position</th>
                                <th width="80">Action</th>
                            </tr>

                            @if($allBrand->isNotEmpty())
                                @foreach($allBrand as $key => $row)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            <img src="{{asset($row->brand_logo)}}" alt="" width="50" height="50">
                                        </td>
                                        <td>{{$row->brand_name}}</td>
                                        <td>{{$row->position}}</td>
                                        <td class="text-center">

                                            <a title="Edit" href="{{route('admin.brand.edit', $row->id)}}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-pencil-square-o"></i></a>

                                            <a title="Delete" href="{{route('admin.brand.destroy', $row->id)}}"
                                               onclick="return confirm('Are you sure your want to delete this data..?')"
                                               class="btn btn-sm btn-danger"> <i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No records found...!</th>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('public/backend/plugins/bootstrap-select/css/bootstrap-select.min.css')}}"
          rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{asset('public/backend/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

    <script>
        $('.selectpicker').selectpicker();
    </script>
@endpush
