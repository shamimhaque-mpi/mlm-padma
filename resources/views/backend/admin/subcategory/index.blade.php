@extends('backend.admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Subcategories</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.subcategory')}}">Subcategories</a></li>
            <li class="breadcrumb-item active">Add New</li>
        </ol>

        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Add New Subcategories
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin.subcategory.store')}}" method="POST">
                            @csrf

                            <input type="hidden" name="position" value="{{count($allSucategory) + 1}}" required>

                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span> </label>
                                <input type="text" name="subcategory_name" class="form-control" id="categoryName"
                                       autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="icon">Category <span class="text-danger">*</span> </label>
                                <select name="category_id" class="form-control selectpicker" data-live-search="true" id="category"
                                        required>
                                    <option value="" selected>-- Select category --</option>
                                    @if($allCategory->isNotEmpty())
                                        @foreach($allCategory as $item)
                                            <option value="{{$item->id}}">{{$item->category_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Add New</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-xl-6">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-list"></i>&nbsp;
                        All Subcategories
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <tr>
                                <th width="50">SL</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th width="50">Position</th>
                                <th width="80">Action</th>
                            </tr>

                            @if($allSucategory->isNotEmpty())
                                @foreach($allSucategory as $key => $row)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$row->subcategory_name}}</td>
                                        <td>{{$row->category['category_name']}}</td>
                                        <td>{{$row->position}}</td>
                                        <td class="text-center">
                                            <a title="Edit" href="{{route('admin.subcategory.edit', $row->id)}}"
                                               class="btn btn-sm btn-warning">
                                                <i class="fa fa-pencil-square-o"></i></a>

                                            <a title="Delete" href="{{route('admin.subcategory.destroy', $row->id)}}"
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
