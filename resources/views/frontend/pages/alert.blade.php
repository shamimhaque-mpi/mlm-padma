@extends('frontend.layout.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner bg-color-full">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Alert</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Alert</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->
<!-- Dashboard start -->
<div class="container">
    <div class="submit-address dashboard-list">
        <form method="GET">
            <h3>Alerts</h3>
            <div class="row pad-20">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Well done!</strong> You successfully read this
                        important alert message.
                    </div>
                    <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Heads up!</strong> This alert needs your attention, but
                        it's not super important.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Warning!</strong> Better check yourself, you're not
                        looking too good.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Oh snap!</strong> Change a few things up and try
                        submitting again.
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Dashboard end -->

@endsection