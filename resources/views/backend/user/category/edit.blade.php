@extends('backend.user.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Categories</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('user.category')}}">Add New</a></li>
            <li class="breadcrumb-item active">Edit Category</li>
        </ol>

        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Edit Categories
                    </div>

                    <div class="card-body">
                        <form action="{{route('user.category.update')}}" method="POST">
                            @csrf

                            <input type="hidden" name="id" value="{{$info->id}}">

                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" name="category_name" value="{{$info->category_name}}" class="form-control" id="categoryName" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="icon">Icon <span class="text-danger">*</span></label>
                                <select name="icon" class="form-control selectpicker" data-live-search="true" required>
                                    <option value="" selected>-- Select Icon --</option>
                                    @if($allIcons->isNotEmpty())
                                        @foreach($allIcons as $list)
                                            <option data-icon="{{$list->class_name}}" {{($info->icon == $list->class_name ? 'selected' : '')}}>{{$list->class_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Position <span class="text-danger">*</span></label>
                                <input type="text" name="position" value="{{$info->position}}" class="form-control" id="categoryName" autocomplete="off" required>
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
                        All Categories
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <tr>
                                <th width="50">SL</th>
                                <th width="50">Icon</th>
                                <th>Name</th>
                                <th width="50">Position</th>
                                <th width="80">Action</th>
                            </tr>

                            @if($allCategories->isNotEmpty())
                                @foreach($allCategories as $key => $row)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td><span class="{{$row->icon}}"></span></td>
                                        <td>{{$row->category_name}}</td>
                                        <td>{{$row->position}}</td>
                                        <td class="text-center">

                                            <a title="Edit" href="{{route('user.category.edit', $row->id)}}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-pencil-square-o"></i></a>

                                            <a title="Delete" href="{{route('user.category.destroy', $row->id)}}"
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
