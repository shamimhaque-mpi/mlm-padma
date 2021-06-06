@extends('backend.admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Posts</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.product')}}">All Product</a></li>
            <li class="breadcrumb-item active">Preview</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-photo mr-1"></i>
                        Product Preview
                    </div>
                    <div class="card-body">

                        <div class="row">
                            @foreach($info->images as $img)
                            <div class="col-3 text-center">
                                <img class="custom-img" src="{{asset($img->medium)}}" alt="">
                            </div>
                            @endforeach
                        </div>
                        

                        <table class="table table-bordered mt-4">
                            <tr>
                                <th width="15%">Name</th>
                                <td width="35%">{{$info->product_name}}</td>

                                <th width="15%">Category</th>
                                <td width="35%">{{$info->category['category_name']}}</td>
                            </tr>

                            <tr>
                                <th width="15%">Subcategory</th>
                                <td width="35%">{{$info->subcategory['subcategory_name']}}</td>

                                <th width="15%">Brand</th>
                                <td width="35%">{{$info->brand['brand_name']}}</td>
                            </tr>

                            <tr>
                                <th width="15%">unit</th>
                                <td width="35%">{{$info->unit}}</td>

                                <th width="15%">Purchase Price</th>
                                <td width="35%">{{$info->purchase_price}}</td>
                            </tr>

                            <tr>
                                <th width="15%">Regular Price</th>
                                <td width="35%">{{$info->regular_price}}</td>

                                <th width="15%">Offer</th>
                                <td width="35%">{{$info->offer}}</td>
                            </tr>

                            <tr>
                                <th width="15%">Discount</th>
                                <td width="35%">{{$info->discount}}</td>

                                <th width="15%">Discount Duration</th>
                                <td width="35%">{{$info->discount_duration}}</td>
                            </tr>

                            <tr>
                                <th width="15%">Point</th>
                                <td width="35%">{{$info->point}}</td>

                                <th width="15%">Min Delivery Day</th>
                                <td width="35%">{{$info->min_delivery_day}}</td>
                            </tr>

                            <tr>
                                <th width="15%">Max Return Day</th>
                                <td width="35%">{{$info->max_return_day}}</td>

                                <th width="15%">Min Order Qty</th>
                                <td width="35%">{{$info->min_order_qty}}</td>
                            </tr>

                            <tr>
                                <th width="15%">Warranty</th>
                                <td width="35%">{{$info->warranty}}</td>

                                <th width="15%">Feature Product</th>
                                <td width="35%">{{$info->feature_product}}</td>
                            </tr>

                            <tr>
                                <th width="15%">Description</th>
                                <td colspan="3">{!! $info->description !!}</td>
                            </tr>

                            <tr>
                                <th width="15%">Status</th>
                                <td width="35%">{{$info->status}}</td>

                                <th width="15%"></th>
                                <td width="35%"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('styles')
    <style>
        .custom-img{
            width: 200px;
            height: 200px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
    </style>
@endpush

@push('scripts')
@endpush
