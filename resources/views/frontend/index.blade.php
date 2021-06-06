@extends('frontend.layout.master')

@section('content')

    @include('frontend.layout.partials.slider')


    <!--category product area start-->
    <section class="category_product_area category_product_six  mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="category_product_carousel category_column4 owl-carousel">
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="{{asset('public/frontend')}}/img/category/category1.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">television</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="{{asset('public/frontend')}}/img/category/category2.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">audio</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="{{asset('public/frontend')}}/img/category/category3.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">Camera</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="{{asset('public/frontend')}}/img/category/category4.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">lundry</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="{{asset('public/frontend')}}/img/category/category5.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">cooling</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="shop.html"><img src="{{asset('public/frontend')}}/img/category/category2.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">audio</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category product area end-->
    
      <!--new product area start-->
    <section class="new_product_area mb-50">
        <div class="container">
            <div class="new_product_three_container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title section_title_two">
                            <h2>New Products</h2>
                        </div>
                        <div class="product_carousel product_column3 owl-carousel">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product26.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{ route('product_details')}}">Aliquam Watches</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>   
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                            <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product27.jpg" alt=""></a>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{ route('product_details')}}">Condimentum Watches</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>   
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                            <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product28.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{ route('product_details')}}">Headphone ipsum</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>   
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                            <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product26.jpg" alt=""></a>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{ route('product_details')}}">Epicuri per</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>   
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                            <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product27.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{ route('product_details')}}">Itaque earum</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>   
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                            <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--new product area end-->
    
    <!--banner area start-->
    <div class="banner_area banner_column2 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('public/frontend')}}/img/bg/banner20.jpg" alt=""></a>
                        </div>
                       
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('public/frontend')}}/img/bg/banner21.jpg" alt=""></a>
                        </div>
                       
                    </div>
                </div>         
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--home section five start-->
    <section class="home_section_five">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="home_section_sidebar_six">
                        <!--new product area start-->
                        <div class="new_product_area product_color_six mb-50">
                            <div class="section_title section_title_two">
                                <h2>Computers  Accessories</h2>
                            </div>
                            <div class="product_carousel product_column3 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product3.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product4.jpg" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product5.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product6.jpg" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product3.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--new product area end-->
                        
                         <!--new product area start-->
                        <div class="new_product_area product_color_six mb-50">
                            <div class="section_title section_title_two">
                                <h2>Camera, Audio & Video</h2>
                            </div>
                            <div class="product_carousel product_column3 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product18.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product19.jpg" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product17.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product27.jpg" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product28.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--new product area end-->

                         <!--new product area start-->
                        <div class="new_product_area product_color_six mb-50">
                            <div class="section_title section_title_two">
                                <h2>Electronics  Store</h2>
                            </div>
                            <div class="product_carousel product_column3 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product22.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product23.jpg" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product24.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product25.jpg" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details')}}"><img src="{{asset('public/frontend')}}/img/product/product22.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details')}}">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               {{-- <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                                <li class="add_to_cart"><a href="{{ route('cart') }}" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                {{-- <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--new product area end-->

                        <!--brand  area start-->
                        <div class="brand_area brand_six mb-50">
                            <div class="section_title section_title_two">
                                <h2>Logo  Brands</h2>
                            </div>
                            <div class="brand_carousel  brand_column4 owl-carousel">
                                <div class="single_brand">
                                    <a href="#"><img src="{{asset('public/frontend')}}/img/brand/brand.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="{{asset('public/frontend')}}/img/brand/brand1.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="{{asset('public/frontend')}}/img/brand/brand2.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="{{asset('public/frontend')}}/img/brand/brand3.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="{{asset('public/frontend')}}/img/brand/brand4.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="{{asset('public/frontend')}}/img/brand/brand5.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="{{asset('public/frontend')}}/img/brand/brand1.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--brand area end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home section five end-->

@endsection
