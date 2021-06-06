@extends('frontend.layout.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner bg-color-full">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Job Post Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Job Post Detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Job details page start -->
<div class="job-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- job box 2 start -->
                <div class="job-box-2">
                    <div class="company-logo">
                        <img src="{{asset($post->company_logo)}}" alt="avatar">
                    </div>
                    <div class="description">
                        <h5 class="title"><a href="#">{{ $post->title }}</a></h5>
                        <div class="candidate-listing-footer">
                            <ul>
                                <li><i class="lnr lnr-briefcase"></i>&nbsp;{{ $post->category['category_name']}}</li>
                                {{-- <li><i class="lnr lnr-warning"></i>&nbsp;{{ ucwords($post->status) }}</li> --}}
                            </ul>
                        </div>
                        <span class="datetime">
                            <i class="lnr lnr-calendar-full"></i>&nbsp;{{ $post->created_at->format('Y-m-d') }} &nbsp; || &nbsp; 
                            <i class="lnr lnr-clock"></i>&nbsp;{{ ucwords($post->created_at->diffForHumans()) }}
                        </span>
                    </div>
                </div>
                <hr class="hr-boder">
                <!-- job description start -->
                <div class="job-description mb-40">
                    <h3 class="heading-2">Job Description</h3>
                    <p>{!! $post->description !!}</p>
                </div>
                
                {{-- Social list 2 start
                <div class="social-list-2 sl-3 float-left mb-40">
                    <span>Share</span>
                    <a href="#" class="facebook-bg">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="twitter-bg">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="google-bg">
                        <i class="fa fa-google"></i>
                    </a>
                    <a href="#" class="linkedin-bg">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#" class="pinterest-bg">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </div> --}}
                <div class="clearfix"></div>
                <!-- Related jobs start -->
                <div class="related-Jobs clearfix">
                    <h3 class="heading-2">Related Jobs</h3>

                    @foreach($relative_jobs as $job)
                    <div class="job-box">
                        <div class="company-logo">
                            <img src="{{asset($job->company_logo)}}" alt="logo">
                        </div>
                        <div class="description">
                            <div class="float-left">
                                <h5 class="title">
                                    <a href="{{route('jobs_details', $job->id)}}">{{ $job->title }}</a>
                                </h5>
                                <div class="candidate-listing-footer">
                                    <ul>
                                        <li><i class="flaticon-work"></i>&nbsp;{{ ucwords(str_replace("_", " ", $job->job_type)) }}</li>
                                    </ul>
                                    <h6>Deadline:&nbsp;{{ $job->end_date }}</h6>
                                </div>
                            </div>
                            <div class="div-right">
                                <a href="{{route('jobs_details', $job->id)}}" class="apply-button">View</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right-2">
                    <!-- Job overview start -->
                    <div class="job-overview widget">
                        <h3 class="sidebar-title">Job Overview</h3>
                        <div class="s-border"></div>
                        <ul>
                            <li><i class="flaticon-money"></i><h5>Salary</h5><span>{{ $post->salary_from }} - {{ $post->salary_to }}</span></li>
                            <li><i class="flaticon-pin"></i><h5>Location</h5><span>{{ ucwords($post->upazila['upazila_name']) }}, {{ ucwords($post->district['district_name']) }}, Bangladesh</span></li>
                            <li><i class="flaticon-woman"></i><h5>Gender</h5><span>Any</span></li>
                            <li><i class="flaticon-work"></i><h5>Job Type</h5><span>{{ ucwords(str_replace("_", " ", $post->job_type)) }}</span></li>
                            <li><i class="lnr lnr-clock"></i><h5>Deadline</h5><span>{{ $post->end_date }}</span></li>
                            {{-- <li><i class="flaticon-honor"></i><h5>Qualification</h5><span>Mba</span></li> --}}
                            {{-- <li><i class="flaticon-notepad"></i><h5>Experience</h5><span>2 to 3 year</span></li> --}}
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Quick contact start -->
                    <div class="widget-5 contact-2 quick-contact">
                        <h3 class="sidebar-title">Quick Contacts</h3>
                        <div class="s-border"></div>
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                            </div>
                            <div class="send-btn">
                                <button type="submit" class="btn btn-md button-theme">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job details page end -->
@endsection

@push('styles')
<style>

</style>
@endpush