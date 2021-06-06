    <!--brand newsletter area start-->
    <div class="newsletter_six_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter_inner">
                        <div class="newsletter_content">
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        </div>
                        <div class="newsletter_form">
                            <form action="#">
                                <input placeholder="Email..." type="text">
                                <button type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    <!--footer area start-->
    <footer class="footer_widgets footer_six">
        <div class="footer_six_inner">
            <div class="container">  
                <div class="footer_top">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="widgets_container contact_us">
                                <a href="{{route('home')}}"><img src="{{asset('public/frontend')}}/img/logo/logo-3.png" alt=""></a>
                                <div class="footer_contact">
                                    <ul>
                                        <li><i class="zmdi zmdi-home"></i><span>Addresss:</span> 2 Fauconberg Rd,Chiswick, London</li>
                                        <li><i class="zmdi zmdi-phone-setting"></i><span>Phone:</span><a href="tel:(+1) 866-540-3229">(+1) 866-540-3229</a> </li>
                                        <li><i class="zmdi zmdi-email"></i><span>Email:</span>  info@plazathemes.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-7">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="widgets_container widget_menu">
                                        <h3>CATAGORYs</h3>
                                        <div class="footer_menu">
                                            <ul>
                                                <li><a href="#">Shipping & Returns</a></li>
                                                <li><a href="#"> Secure Shopping</a></li>
                                                <li><a href="#">International Shipping</a></li>
                                                <li><a href="#"> Affiliates</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="widgets_container widget_menu">
                                        <h3>Information</h3>
                                        <div class="footer_menu">
                                            <ul>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('contact')}}"> Contact</a></li>
                                                <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                                                <li><a href="{{route('terms-condition')}}">Terms & Conditions</a></li>
                                                {{-- <li><a href="blog.html">Blog</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="widgets_container">
                                <h3>Facebook Post</h3>
                                <div class="fb_post">
                                    <div class="fb-page" 
                                    data-href="https://www.facebook.com/facebook"
                                    data-width="100%" 
                                    data-height="125"
                                    data-hide-cover="false"
                                    data-show-facepile="false"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer_bottom footer_bottom_six">      
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright_area">
                            <p>Copyright &copy; 2020 <a href="http://www.freelanceitlab.com/"> Freelance IT Lab </a>  All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="footer_payment text-right">
                            <p><img src="{{asset('public/frontend')}}/img/icon/payment.png" alt=""></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </footer>
    <!--footer area end-->
   
   
    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('public/frontend')}}/img/product/product37.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('public/frontend')}}/img/product/product24.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('public/frontend')}}/img/product/product25.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('public/frontend')}}/img/product/product22.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">    
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{asset('public/frontend')}}/img/product/productbig1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{asset('public/frontend')}}/img/product/productbig2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{asset('public/frontend')}}/img/product/productbig4.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{asset('public/frontend')}}/img/product/productbig5.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>    
                                </div>  
                            </div> 
                            
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Handbag feugiat</h2> 
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>    
                                        <span class="old_price" >$78.99</span>    
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
                                    </div> 
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="0" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>   
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>    
                                    </div>      
                                </div>    
                            </div>    
                        </div>     
                    </div>
                </div>    
            </div>
        </div>
    </div>

     <!-- modal area end-->



<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{asset('public/frontend')}}/js/plugins.js"></script>

<!-- Main JS -->
<script src="{{asset('public/frontend')}}/js/main.js"></script>
    
@stack('scripts')

</body>
<!-- Mirrored from demo.hasthemes.com/pallas-preview/pallas/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 04:18:25 GMT -->
</html>