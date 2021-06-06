@extends('backend.admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Products</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.product')}}">All Product</a></li>
            <li class="breadcrumb-item active">Edit Product</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4 rounded-0">
                    <div class="card-header">
                        <i class="fa fa-plus"></i>&nbsp;
                        Edit Product
                    </div>

                    <div class="card-body">

                        <form action="{{route('admin.product.update', $info->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="productName">Name <span class="text-danger">*</span></label>
                                        <input type="text" name="product_name" value="{{$info->product_name}}" class="form-control" id="productName"
                                               autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="unit">Unit <span class="text-danger">*</span></label>
                                        <select name="unit" class="form-control" required>
                                            <option value="" selected>-- Select unit --</option>
                                            <option value="l" {{($info->unit == 'l' ? 'selected' : '')}}>l</option>
                                            <option value="ml" {{($info->unit == 'ml' ? 'selected' : '')}}>ml</option>
                                            <option value="kg" {{($info->unit == 'kg' ? 'selected' : '')}}>kg</option>
                                            <option value="pcs" {{($info->unit == 'pcs' ? 'selected' : '')}}>pcs</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="category">Category <span class="text-danger">*</span></label>
                                        <select name="category_id" class="form-control selectpicker"
                                                data-live-search="true" id="category"
                                                required>
                                            <option value="" selected>-- Select category --</option>
                                            @if($allCategory->isNotEmpty())
                                                @foreach($allCategory as $item)
                                                    <option value="{{$item->id}}" {{($info->category_id == $item->id ? 'selected' : '')}}>{{$item->category_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="subcategory">Subcategory <span class="text-danger">*</span></label>
                                        <select name="subcategory_id" class="form-control" id="subcategory"
                                                required>
                                            <option value="" selected>-- Select subcategory --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="brand">Brand <span class="text-danger">*</span></label>
                                        <select name="brand_id" class="form-control selectpicker"
                                                data-live-search="true" id="brand"
                                                required>
                                            <option value="" selected>-- Select brand --</option>
                                            @if($allBrand->isNotEmpty())
                                                @foreach($allBrand as $item)
                                                    <option value="{{$item->id}}" {{($info->brand_id == $item->id ? 'selected' : '')}}>{{$item->brand_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <label for="offer">Offer <span
                                            class="text-danger">&nbsp;</span></label>
                                    <select name="offer" class="form-control" id="offer" required>
                                        <option value="0" {{($info->offer == 0 ? 'selected' : '')}}>No</option>
                                        <option value="1" {{($info->offer == 1 ? 'selected' : '')}}>Yes</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="purchasePrice">Purchase Price <span class="text-danger">*</span></label>
                                        <input type="number" name="purchase_price" value="{{$info->purchase_price}}" min="0" class="form-control" id="purchasePrice"
                                               placeholder="0" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="regularPrice">Regular Price <span class="text-danger">*</span></label>
                                        <input type="number" name="regular_price" value="{{$info->regular_price}}" min="0" class="form-control" id="regularPrice" placeholder="0" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="point">Point <span class="text-danger"> </span></label>
                                        <input type="number" name="point" value="{{$info->point}}" min="0" class="form-control" id="point" placeholder="0" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="warranty">Warranty <span class="text-danger"> </span></label>
                                        <input type="text" name="warranty" value="{{$info->warranty}}" class="form-control" id="warranty" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="discount">Discount <small>(in %)</small> <span class="text-danger"> </span></label>
                                        <input type="number" name="discount" value="{{$info->discount}}" min="0" class="form-control" id="discount"
                                               placeholder="0" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="discountDuration">Discount Duration <span class="text-danger"> </span></label>
                                        <input type="date" name="discount_duration" value="{{$info->discount_duration}}" min="0" class="form-control" id="discountDuration" placeholder="yyyy-mm-dd" autocomplete="off">
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="minOrderQty">Min Order Quantity <span class="text-danger"> </span></label>
                                        <input type="number" name="min_order_qty" value="{{$info->min_order_qty}}" min="0" class="form-control" id="minOrderQty"
                                               placeholder="0" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="discountDuration">Min Delivery Day <span class="text-danger"> </span></label>
                                        <input type="date" name="min_delivery_day" value="{{$info->min_delivery_day}}" min="0" class="form-control" id="discountDuration" placeholder="yyyy-mm-dd" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="featureProduct">Featured Product <span
                                                class="text-danger">*</span></label>
                                        <select name="feature_product" class="form-control" id="featureProduct">
                                            <option value="0" {{($info->feature_product == 0 ? 'selected' : '')}}>No</option>
                                            <option value="1" {{($info->feature_product == 1 ? 'selected' : '')}}>Yes</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="active" {{($info->status == 'active' ? 'selected' : '')}}>Active</option>
                                            <option value="dactive" {{($info->status == 'dactive' ? 'selected' : '')}}>Dactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="position">Position &nbsp; <span class="text-danger">*</span></label>
                                        <input type="text" name="position" value="{{$info->position}}" class="form-control" id="position" required="">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title">Description</label>
                                <textarea name="description" class="form-control" id="summernote" cols="30"
                                          rows="10" readonly>{!! $info->description !!}</textarea>
                            </div>

                            <div class="form-group" style="display: flex;">
                                @foreach($info->images as $img)
                                <div class="delete-image" data-image="{{$img->id}}">
                                    <img class="custom-img" src="{{asset($img->small)}}" alt="">
                                    <span onclick="deleteImage({{$img->id}})"><i class="fa fa-trash-o"></i></span>
                                </div>
                                @endforeach
                            </div>

                            <div class="row" id="photoParent">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label id="photoLabel" for="photo">Product Photo <span id="addPhoto" class="btn btn-sm btn-success fa fa-plus" style="padding: 1px 6px;"></span></label>
                                        <input type="file" name="photo[]" class="form-control" id="photoLabel">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Update Product</button>
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

    <style>
        .delete-image{
            position: relative;
            width: 150px;
            height: 150px;
            float: left;
        }

        .delete-image img{
            border: 1px solid #ddd;
            padding: 10px;
            width: 150px;
            height: 150px;
        }

        .delete-image span{
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            background: red;
            color: #fff;
            padding: 2px 5px;
        }   
    </style>
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


        // delete image
        function deleteImage(imageId){

            var confirmMsg =  confirm("Are you sure you want to delete this image!");

            if (confirmMsg) {
                $.ajax({
                    type    : "GET",
                    url: "{{asset(route('admin.product.destroy_image'))}}",
                    data: {id: imageId},
                    dataType: 'json',
                    success : function(response){

                        if (response == 'success') {

                            // remove image
                            $('.form-group .delete-image').each(function(){

                                if($(this).data('image') == imageId){
                                    $(this).remove();
                                }
                            });

                            // send toaster image
                            toastr.error("Image successfully deleted!", "Delete");
                        }
                    }
                });
            }
        };


        // add more photo
        $('#addPhoto').on('click', function(){

           var count = $('#photoParent .col-xl-6').length;

            if(count <= 3){

                var templat = '<div class="col-xl-6" data-cid="'+count+'">';
                    templat += '<div class="form-group">';
                    templat += '<label for="photo">&nbsp; <span class="text-danger"></span></label>';
                    templat += '<div class="input-group">';
                    templat += '<input type="file" name="photo[]" class="form-control">';
                    templat += '<div class="input-group-append">';
                    templat += '<span class="input-group-text btn btn-danger" onclick="removePhoto('+count+')"><i class="fa fa-trash-o"></i></span></div></div>';
                    templat += '</div></div>';

               $('#photoParent').append(templat);

               count++;

            }else{
                
                $('#photoParent').append('<div class="col-12" id="limitError"> <p class="text-danger">You can add up to 4 images. </p></div>');

                $('#addPhoto').hide();
            }
            
        }); 


        // remove photo
        function removePhoto(count){

            $('#photoParent .col-xl-6').each(function(){

                if (typeof $(this).data('cid') !== 'undefined' && $(this).data('cid') == count) {
                    
                    $(this).remove();

                    var totalPhoto = $('#photoParent .col-xl-6').length;

                    if(totalPhoto <= 3){
                        $('#addPhoto').show();
                        $('#limitError').remove();
                    }
                }
            });
        }



        // get upazila function
        function getSubcategoryFn(category_id, subcategory_id) {

            $.ajax({
                type    : "GET",
                url: "{{asset(route('admin.ajax.result'))}}",
                data: {
                    table: 'subcategories',
                    where: [['category_id', '=', category_id]],
                    select: ['id', 'subcategory_name'],
                },
                dataType: 'json',
                success : function(response){

                    $("#subcategory").children().remove();
                    $("#subcategory").html('<option value="">-- Select subcategory --</option>');

                    if(response.length > 0){
                        $.each( response, function(key, item) {

                            if(typeof subcategory_id !== 'undefined'){
                                var option = '<option value="'+ (item.id) +'" '+ (item.id == subcategory_id ? "selected" : "") +'>' + (item.subcategory_name) + '</option>';
                            }else{
                                var option = '<option value="'+ (item.id) +'">' + (item.subcategory_name) + '</option>';
                            }

                            $("#subcategory").append(option);
                        });
                    }
                }
            });
        }

        // get districe and upazila id
        var category_id = '{{$info->category_id}}';
        var subcategory_id = '{{$info->subcategory_id}}';

        // get default data and select upazila
        getSubcategoryFn(category_id, subcategory_id);

        // get district wise upazila
        $('#category').change(function () {

            var category_id = $(this).val();

            getSubcategoryFn(category_id);
        });
    </script>
@endpush
