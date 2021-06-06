<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu ">
            <div class="nav">


                <div class="sb-sidenav-menu-heading pt-0"></div>


                <a class="nav-link"
                   href="{{route('admin.dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-tachometer"></i></div>
                    Dashboard
                </a>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myProfile"aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-paste"></i></div>
                    My Profile
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="myProfile" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#myProfile" href="{{route('admin.profile')}}">View Profile</a>
                        <a class="nav-link" data-parent="#myProfile" href="{{route('admin.profile.edit')}}">Edit Profile</a>
                        <a class="nav-link" data-parent="#myProfile" href="{{route('admin.profile.password')}}">Change Password</a>
                    </nav>
                </div>

                <a class="nav-link"
                   href="{{route('admin.category')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-cubes"></i></div>
                    Categories
                </a>

                <a class="nav-link"
                   href="{{route('admin.subcategory')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-cubes"></i></div>
                    Subcategories
                </a>

                <a class="nav-link"
                   href="{{route('admin.brand')}}">
                    <div class="sb-nav-link-icon"><i class="lnr lnr-tag"></i></div>
                    Brand
                </a>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-paste"></i></div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProduct" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#collapseProduct"
                           href="{{route('admin.product')}}">All Product</a>
                        <a class="nav-link" data-parent="#collapseProduct"
                           href="{{route('admin.product.create')}}">Add New</a>
                    </nav>
                </div>



                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMember"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                    Members
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMember" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#collapseMember"
                           href="{{route('admin.member')}}">All Member</a>
                        <a class="nav-link" data-parent="#collapseMember"
                           href="{{route('admin.member.create')}}">Add New</a>
                    </nav>
                </div>

               

                <a class="nav-link"
                   href="{{route('admin.setting')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-gears"></i></div>
                    Settings
                </a>
            </div>
        </div>
        {{-- <div class="sb-sidenav-footer">
             <div class="small">Logged in as:</div>
             Start Bootstrap
         </div>--}}
    </nav>
</div>
