@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Posts</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('post')}}">All Post</a></li>
            <li class="breadcrumb-item active">Preview</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-photo mr-1"></i>
                        Post Preview
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="post-contain">
                                    <div class="post-header clearfix">
                                        <figure class="company-logo">
                                            <img class="img-thumbnail" src="{{ asset($info->company_logo) }}" alt="">
                                        </figure>
                                        <div class="header-text">
                                            <h4>{{ $info->title }}</h4>
                                            <h6>
                                                <i class="lnr lnr-briefcase"></i>{{ $info->category['category_name']}} &nbsp; 
                                                <i class="lnr lnr-warning"></i>{{ ucwords($info->status) }}
                                            </h6>
                                            <h6>
                                                <i class="lnr lnr-clock"></i>{{ $info->created_at->format('Y-m-d') }} &nbsp; || &nbsp; {{ ucwords($info->created_at->diffForHumans()) }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="contain">
                                        <h3>Job Description</h3>
                                        <div class="text-justify">
                                            <p>{!!$info->description!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- Job overview start -->
                                <div class="job-overview">
                                    <h3 class="sidebar-title">Job Overview</h3>
                                    <div class="s-border"></div>
                                    <ul>
                                        <li><i class="fa fa-money"></i><h5>Salary</h5><span>{{ $info->salary_from }} - {{ $info->salary_to }}</span></li>
                                        <li><i class="lnr lnr-location"></i><h5>Location</h5><span>{{ ucwords($info->upazila['upazila_name']) }}, {{ ucwords($info->district['district_name']) }}, Bangladesh</span></li>
                                        <li><i class="fa fa-transgender"></i><h5>Gender</h5><span>Any</span></li>
                                        <li><i class="fa fa-list-alt"></i><h5>Job Type</h5><span>{{ ucwords(str_replace("_", " ", $info->job_type)) }}</span></li>
                                        <li><i class="lnr lnr-clock"></i><h5>Deadline</h5><span>{{ $info->end_date }}</span></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <!-- Quick contact start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('styles')
    <style>
        .company-logo {
            width: 15%;
            float: left;
        }
        .post-header {
            width:100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }
        .header-text {
            width: 85%;
            float: left;
            padding: 5px 15px;
        }
        .contain {
            width:100%;
            float: left;
        }
        .contain h3 {
            margin: 15px 0;
        }
        .header-text h6 i {
            margin-right:10px;
        }
        .job-overview .sidebar-title {
            font-size: 21px;
            position: relative;
            margin: 0 0 7px;
            font-weight: 600;
        }
        .s-border {
            width: 30px;
            height: 3px;
            background: #4d4d4d;
            margin-bottom: 30px;
            border-radius: 100px;
        }
        .job-overview ul {
            padding: 0;
            width: 100%;
            margin: 0;
            list-style-type: none;
        }
        .job-overview ul li {
            float: left;
            position: relative;
            padding-left: 40px;
            border-bottom: solid 1px #efefef;
            width: 100%;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .job-overview ul li i {
            left: 0;
            position: absolute;
            top: 7px;
            font-size: 25px;
        }
    </style>
@endpush

@push('scripts')
@endpush
