<!--header area start-->
    <header class="header_area">
        <!--header top start-->
        <div class="header_top header_top_six">
            <div class="container">  
                <div class="row align-items-center">
                    <div class="col-lg-4">
                       <div class="welcome_text">
                           <p>Welcome to <span>Electronics Store</span> </p>
                       </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="top_right text-right">
                            <ul>
                                @if(!Auth()->check())
                                <li class="top_links">
                                    <a href="{{route('login')}}">
                                        <i class="zmdi zmdi-lock-outline"></i> Login 
                                    </a>
                                </li>
                                @else
                                <li class="top_links"><a href="{{route('user.dashboard')}}"><i class="zmdi zmdi-account"></i> My account <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="{{route('user.dashboard')}}">My Account </a></li>
                                        <li><a href="{{route('checkout')}}">Checkout </a></li>
                                        <li><a href="{{route('cart')}}">Shopping Cart</a></li>
                                        <li><a href="{{route('logout')}}">Logout</a></li>
                                    </ul>
                                </li>
                                @endif

                            </ul>
                        </div> 
                    </div>
                    
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header center area start-->
        <div class="header_middle header_middle_six">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{asset('public/frontend')}}/img/logo/logo-3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header_middle_inner">
                            <div class="search-container">
                               <form action="#">
                                   <div class="hover_category">
                                        <select class="select_option" name="select" id="categori">
                                            <option selected value="1">All Categories</option>
                                            <option value="2">Accessories</option>
                                            <option value="3">Accessories & More</option>
                                            <option value="4">Butters & Eggs</option>
                                            <option value="5">Camera & Video </option>
                                            <option value="6">Mornitors</option>
                                            <option value="7">Tablets</option>
                                            <option value="8">Laptops</option>
                                            <option value="9">Handbags</option>
                                            <option value="10">Headphone & Speaker</option>
                                            <option value="11">Herbs & botanicals</option>
                                            <option value="12">Vegetables</option>
                                            <option value="13">Shop</option>
                                            <option value="14">Laptops & Desktops</option>
                                            <option value="15">Watchs</option>
                                            <option value="16">Electronic</option>
                                        </select>                        
                                   </div>
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit"><i class="zmdi zmdi-search"></i></button> 
                                    </div>
                                </form>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>2items - $213.00</span> </a>
                                <!--mini cart-->
                                 <div class="mini_cart mini_cart_six">
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="{{asset('public/frontend')}}/img/s-product/product.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Condimentum Watches</a>

                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$60.00</span>

                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="{{asset('public/frontend')}}/img/s-product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Officiis debitis</a>
                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$69.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Subtotal:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="{{ route('cart') }}">View cart</a>
                                            <a href="{{ route('checkout') }}">Checkout</a>
                                        </div>
                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header center area end-->
        
        <!--header middel start-->
        <div class="header_bottom">
            <div class="container">
                <div class="row">
                   <div class="col-lg-3">
                       <div class="categories_menu categorie_six">
                            <div class="categories_title">
                                <h2 class="categori_toggle">Categories</h2>
                            </div>
                            <div class="categories_menu_toggle" style="{{(Route::currentRouteName() != 'home' ? 'display: none;' : '')}}">
                                <ul> 
                                    <li class="menu_item_children categorie_list"><a href="#"><span><i class="zmdi zmdi-desktop-mac"></i></span> Electronic <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
                                            <li class="menu_item_children"><a href="#">Wheel Bearings</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="#">Bower</a></li>
                                                    <li><a href="#">Flipbac</a></li>
                                                    <li><a href="#">Gary Fong</a></li>
                                                    <li><a href="#">GigaPan</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Wheel Rim Screws</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">2-Stroke</a></li>
                                                    <li><a href="#">Handbag</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children last_child"><a href="#">Wheel Simulators</a>
                                                    <ul class="categorie_sub_menu">
                                                        <li><a href="#">Bags & Cases</a></li>
                                                        <li><a href="#">Binoculars & Scopes</a></li>
                                                        <li><a href="#">Film Photography</a></li>
                                                        <li><a href="#">Lighting & Studio</a></li>
                                                    </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="menu_item_children"><a href="#"><span><i class="zmdi zmdi-image"></i></span>  Fashion & Beauty <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_3">
                                            <li class="menu_item_children"><a href="#">Chair</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Dining room</a></li>
                                                        <li><a href="#">bedroom</a></li>
                                                        <li><a href="#"> Home & Office</a></li>
                                                        <li><a href="#">living room</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Lighting</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Ceiling Lighting</a></li>
                                                        <li><a href="#">Wall Lighting</a></li>
                                                        <li><a href="#">Outdoor Lighting</a></li>
                                                        <li><a href="#">Smart Lighting</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Sofa</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Fabric Sofas</a></li>
                                                        <li><a href="#">Leather Sofas</a></li>
                                                        <li><a href="#">Corner Sofas</a></li>
                                                        <li><a href="#">Sofa Beds</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu_item_children"><a href="#"><span><i class="zmdi zmdi-camera"></i></span> Camera & Photo <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="#">Brake Tools</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Driveshafts</a></li>
                                                        <li><a href="#">Spools</a></li>
                                                        <li><a href="#">Diesel </a></li>
                                                        <li><a href="#">Gasoline</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Emergency Brake</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Dolls for Girls</a></li>
                                                        <li><a href="#">Girls' Learning Toys</a></li>
                                                        <li><a href="#">Arts and Crafts for Girls</a></li>
                                                        <li><a href="#">Video Games for Girls</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="menu_item_children"><a href="#"><span><i class="zmdi zmdi-dribbble"></i></span> Sport & Outdoor <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="#">Check Trousers</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Building</a></li>
                                                        <li><a href="#">Electronics</a></li>
                                                        <li><a href="#">action figures </a></li>
                                                        <li><a href="#">specialty & boutique toy</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Calculators</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Dolls for Girls</a></li>
                                                        <li><a href="#">Girls' Learning Toys</a></li>
                                                        <li><a href="#">Arts and Crafts for Girls</a></li>
                                                        <li><a href="#">Video Games for Girls</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="#"><span><i class="zmdi zmdi-tv"></i></span> TV & Audio</a></li>
                                    <li><a href="#"><span><i class="zmdi zmdi-tv-list"></i></span> Home Funiture</a></li>
                                    <li><a href="#"><span><i class="zmdi zmdi-cake"></i></span> Toys For kids</a></li>
                                    <li><a href="#"><span><i class="zmdi zmdi-memory"></i></span> Memory Cards</a></li>
                                    <li><a href="#"><span><i class="zmdi zmdi-case-download"></i></span> Living Room</a></li>
                                    <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
                                </ul>
                            </div>
                        </div>
                   </div>
                    <div class="col-lg-9">
                        <div class="main_menu header_position menu_six"> 
                            <nav>  
                                <ul>
                                    <li class="{{(Route::currentRouteName() == 'home' ? 'active' : '')}}"><a href="{{route('home')}}"><i class="zmdi zmdi-home"></i> Home</a></li>


                                    <li class="{{(Route::currentRouteName() == 'shop' ? 'active' : '')}}"><a href="{{route('shop')}}"><i class="zmdi zmdi-shopping-basket"></i> Shop</a></li>

                                    <li class="{{(Route::currentRouteName() == 'about' ? 'active' : '')}}"><a href="{{route('about')}}"><i class="zmdi zmdi-comments"></i> about Us</a></li>
                                    <li class="{{(Route::currentRouteName() == 'contact' ? 'active' : '')}}"><a href="{{route('contact')}}"><i class="zmdi zmdi-account-box-mail"></i>  Contact Us</a></li>
                                </ul>  
                            </nav> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
     
    </header>
    <!--header area end-->
    
    <!--Offcanvas menu area start-->
    
    <div class="off_canvars_overlay">
                
    </div>