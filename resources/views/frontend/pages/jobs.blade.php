@extends('frontend.layout.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner bg-color-full">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Job Listing</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Job Listing</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- job listing section start -->
<div class="job-listing-section content-area" style="overflow: hidden;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget-4 advanced-search">
                        <form method="GET" class="informeson">
                            <div class="form-group">
                                @csrf
                                <label>District</label>
                                <select class="selectpicker search-fields" name="district">
                                    <option value="">All District</option>
                                    @foreach($districts as $key=>$value)
                                    <option value="{{ $value->id }}">{{ $value->district_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="selectpicker search-fields" name="category" id="k">
                                    <option value="">All Category</option>
                                    @foreach($categories as $key=>$value)
                                    <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content4">
                                <i class="fa fa-plus-circle"></i> Job Type
                            </a>
                            <div id="options-content4" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox13" name="full_time" value="1" type="checkbox">
                                    <label for="checkbox13">
                                        Full Time
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox14" name="part_time" value="1" type="checkbox">
                                    <label for="checkbox14">
                                        Part Time
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content3">
                                <i class="fa fa-plus-circle"></i> Qualification
                            </a>
                            <div id="options-content3" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox11" name="qualification" value="intermidiate" type="checkbox">
                                    <label for="checkbox11">
                                        Intermidiate
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox12" name="qualification" value="gradute" type="checkbox">
                                    <label for="checkbox12">
                                        Gradute
                                    </label>
                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12" id="search_loading">
                <!-- Option bar start -->
                <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-7">
                            <div class="keywords">
                                <input type="text" name="search" class="form-control selectpicker search-fields" placeholder="Search Keywords">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- job box start -->
                @foreach($posts as $post)
                <div class="job-box">
                    <div class="company-logo">
                        <img src="{{asset($post->company_logo)}}" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title">
                                <a href="{{route('jobs_details', $post->id)}}">{{ $post->title }}</a>
                            </h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i>&nbsp;{{ $post->job_type }}</li>
                                </ul>
                                <h6>Deadline:&nbsp;{{ $post->end_date }}</h6>
                            </div>
                        </div>
                        <div class="div-right">
                            <a href="{{route('jobs_details', $post->id)}}" class="apply-button">View</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    {{ $posts->links() }}
                    {{-- <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav> --}}
                </div>
                <div class="row">
                    <div class="loading animate__fadeOut" id="loader" style="min-height: 80vh">
                        <figure class="figure-img text-center">
                            <img class="img-fluid mt-5" alt=""
                                src="{{asset('public/frontend/img/loading.gif')}}">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('public/frontend/js/post.js') }}"></script>
<script>
    new limitPost("{{ route('ajax.post') }}", "{{ csrf_token() }}");
</script>
<!-- job listing section end -->
@endsection


@push('styles')
<style>
    .pagination{
        margin-top: 10px;
    }
    .loading {
        width: 100%;
        height: auto;
        position: absolute;
        top: 72px;
        left: 15px;
        background: #fff;
    }
    .animate__fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
        -webkit-animation:fadeIn 1s ease-in 0s 1 normal forwards;
        -moz-animation:fadeIn 1s ease-in 0s 1 normal forwards;
        animation:fadeIn 1s ease-in 0s 1 normal forwards;
    }
    .animate__fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
        -webkit-animation:fadeOut 1s ease-in 0s 1 normal forwards;
        -moz-animation:fadeOut 1s ease-in 0s 1 normal forwards;
        animation:fadeOut 1s ease-in 0s 1 normal forwards;
    }



    /* Fading entrances  */
    @-o-keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    @-ms-keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    @-webkit-keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    /* Fading exits */
    @-o-keyframes fadeOut {
        from {opacity: 1;}
        to {opacity: 0;}
    }
    @-ms-keyframes fadeOut {
        from {opacity: 1;}
        to {opacity: 0;}
    }
    @-moz-keyframes fadeOut {
        from {opacity: 1;}
        to {opacity: 0;}
    }
    @-webkit-keyframes fadeOut {
        from {opacity: 1;}
        to {opacity: 0;}
    }
    @keyframes fadeOut {
        from {opacity: 1;}
        to {opacity: 0;}
    }
    
</style>
@endpush
@push("scripts")
<script>

</script>
@endpush