@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Posts</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('post')}}">All Post</a></li>
            <li class="breadcrumb-item active">Edit Post</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Edit Post
                    </div>

                    <div class="card-body">

                        <form action="{{route('post.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$info->id}}">

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="title">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{$info->title}}" class="form-control" id="title"
                                               autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="category">Category <span class="text-danger">*</span></label>
                                        <select name="category_id" class="form-control selectpicker" data-live-search="true" id="category"
                                                required>
                                            <option value="">-- Select category --</option>
                                            @if($allCategory->isNotEmpty())
                                                @foreach($allCategory as $item)
                                                    <option value="{{$item->id}}" {{($info->category_id == $item->id ? 'selected' : "")}}>{{$item->category_name}}</option>
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
                                                    <option value="{{$item->id}}" {{($info->district_id == $item->id ? 'selected' : "")}}>{{$item->district_name}}</option>
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
                                        <input type="text" name="company_name" value="{{$info->company_name}}" class="form-control" id="companyName"
                                               autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <label for="companyLogo">Company Logo <span class="text-danger">&nbsp;</span></label>


                                    <div class="input-group mb-3">
                                        <input type="file" name="company_logo" class="form-control" id="companyLogo"
                                               autocomplete="off">
                                        <div class="input-group-append">
                                            <img width="60" src="{{asset($info->company_logo)}}" alt="">
                                        </div>
                                    </div>

                                    <input type="hidden" name="old_company_logo" value="{{$info->company_logo}}">

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="title">Description</label>
                                <textarea name="description" class="form-control" id="summernote" cols="30"
                                          rows="10" readonly>{{$info->description}}</textarea>
                            </div>


                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="salaryFrom">Salary From <span class="text-danger">*</span></label>
                                        <input type="number" name="salary_from" value="{{$info->salary_from}}" min="0" class="form-control"
                                               placeholder="0.00" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="salaryTo">Salary To <span class="text-danger">*</span></label>
                                        <input type="number" name="salary_to" value="{{$info->salary_to}}" min="0" class="form-control"
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
                                            <option value="0" {{($info->featured_post == 0 ? 'selected' : '')}}>False</option>
                                            <option value="1" {{($info->featured_post == 1 ? 'selected' : '')}}>True</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="pending" {{($info->status == 'pending' ? 'selected' : '')}}>Pending</option>
                                            <option value="publish" {{($info->status == 'publish' ? 'selected' : '')}}>Publish</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="jobType">Job Type <span class="text-danger">*</span></label>
                                        <select name="job_type" class="form-control" id="jobType">
                                            <option value="full_time" {{($info->job_type == 'full_time' ? 'selected' : '')}}>Full Time</option>
                                            <option value="part_time" {{($info->job_type == 'part_time' ? 'selected' : '')}}>Part Time</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="expireDate">Expire Date <span class="text-danger">*</span></label>
                                        <input type="date" name="end_date" value="{{$info->end_date}}" class="form-control" placeholder="0000-00-00"
                                               autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="jobType">Position <span class="text-danger">*</span></label>
                                        <input type="text" name="post_position" class="form-control" value="{{$info->post_position}}">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group text-right" style="margin-top: 32px;">
                                        <button type="submit" class="btn btn-primary">Update Post</button>
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

        // get upazila function
        function getUpazilaFn(district_id, upazila_id) {

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

                            if(typeof upazila_id !== 'undefined'){
                                var option = '<option value="'+ (item.id) +'" '+ (item.id == upazila_id ? "selected" : "") +'>' + (item.upazila_name) + '</option>';
                            }else{
                                var option = '<option value="'+ (item.id) +'">' + (item.upazila_name) + '</option>';
                            }

                            $("#upazila").append(option);
                        });
                    }
                }
            });
        }

        // get districe and upazila id
        var district_id = '{{$info->district_id}}';
        var upazila_id = '{{$info->upazila_id}}';

        // get default data and select upazila
        getUpazilaFn(district_id, upazila_id);

        // get district wise upazila
        $('#district').change(function () {

            var district_id = $(this).val();

            getUpazilaFn(district_id);
        });
    </script>
@endpush
