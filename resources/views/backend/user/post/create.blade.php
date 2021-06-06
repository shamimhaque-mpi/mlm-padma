@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Posts</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('post')}}">All Post</a></li>
            <li class="breadcrumb-item active">Add New</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Add New Post
                    </div>

                    <div class="card-body">

                        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="post_position" value="{{$position}}">

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="title">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" id="title"
                                               autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="category">Category <span class="text-danger">*</span></label>
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
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="district">District <span class="text-danger">*</span></label>
                                        <select name="district_id" class="form-control selectpicker" data-live-search="true" id="district"
                                                required>
                                            <option value="" selected>-- Select district --</option>
                                            @if($allDistrict->isNotEmpty())
                                                @foreach($allDistrict as $item)
                                                    <option value="{{$item->id}}">{{$item->district_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="upazila">Upazila <span class="text-danger">*</span></label>
                                        <select name="upazila_id" class="form-control" id="upazila"
                                                required>
                                            <option value="" selected>-- Select upazila --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="companyName">Company Name <span class="text-danger">*</span></label>
                                        <input type="text" name="company_name" class="form-control" id="companyName"
                                               autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <label for="companyLogo">Company Logo <span class="text-danger">&nbsp;</span></label>
                                    <input type="file" name="company_logo" class="form-control" id="companyLogo"
                                           autocomplete="off">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="title">Description</label>
                                <textarea name="description" class="form-control" id="summernote" cols="30"
                                          rows="10" readonly></textarea>
                            </div>


                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="salaryFrom">Salary From <span class="text-danger">*</span></label>
                                        <input type="number" name="salary_from" min="0" class="form-control"
                                               placeholder="0.00" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="salaryTo">Salary To <span class="text-danger">*</span></label>
                                        <input type="number" name="salary_to" min="0" class="form-control"
                                               placeholder="0.00" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="featurePost">Featured Post <span
                                                class="text-danger">*</span></label>
                                        <select name="featured_post" class="form-control" id="featurePost">
                                            <option value="0" selected>False</option>
                                            <option value="1">True</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="pending" selected>Pending</option>
                                            <option value="publish">Publish</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="jobType">Job Type <span class="text-danger">*</span></label>
                                        <select name="job_type" class="form-control" id="jobType">
                                            <option value="full_time" selected>Full Time</option>
                                            <option value="part_time">Part Time</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="expireDate">Expire Date <span class="text-danger">*</span></label>
                                        <input type="date" name="end_date" class="form-control" placeholder="0000-00-00"
                                               autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Add Post</button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>


            </div>
        </div>

    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('public/backend/plugins/bootstrap-select/css/bootstrap-select.min.css')}}"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@push('scripts')

    <script src="{{asset('public/backend/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script type="text/javascript">
        $('.selectpicker').selectpicker();

        $('#summernote').summernote({
            placeholder: 'Type job description....',
            tabsize: 2,
            height: 400
        });

        $('#district').change(function () {

            var district_id = $(this).val();

            $.ajax({
                type    : "GET",
                url     : "{{asset(route('ajax.result'))}}",
                data    : {
                    table: 'upazilas',
                    where: [['district_id', '=', district_id]],
                    select: ['id', 'upazila_name'],
                },
                dataType: 'json',
                success : function(response){

                    $("#upazila").children().remove();

                    if(response.length > 0){
                        $.each( response, function(key, item) {

                            var option = '<option value="'+ (item.id) +'">' + (item.upazila_name) + '</option>';

                            $("#upazila").append(option);
                        });
                    }
                }
            });
        });
    </script>
@endpush
