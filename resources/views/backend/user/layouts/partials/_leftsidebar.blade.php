<style>
    .sb-sidenav-menu::-webkit-scrollbar {
        width: 0px;
    }    
</style>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu ">
            <div class="nav">
                <div class="sb-sidenav-menu-heading pt-0"></div>

                {{-- Dashboard --}}
                <a class="nav-link" href="{{route('user.dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-tachometer"></i></div>
                    Dashboard
                </a>

                {{-- My Profile --}}
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#myProfile"aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-paste"></i></div>
                    My Profile
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="myProfile" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#myProfile" href="{{route('user.profile')}}">View Profile</a>
                        <a class="nav-link" data-parent="#myProfile" href="{{route('user.profile.edit')}}">Edit Profile</a>
                        <a class="nav-link" data-parent="#myProfile" href="{{route('user.profile.password')}}">Change Password</a>
                    </nav>
                </div>

                {{-- My Team --}}
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-paste"></i></div>
                    My Team
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProduct" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#collapseProduct" href="{{route('user.team.add')}}">Add Member</a>
                        <a class="nav-link" data-parent="#collapseProduct" href="{{route('user.team.all')}}">All Member</a>
                        <a class="nav-link" data-parent="#collapseProduct" href="{{route('user.team.tree')}}">View Tree</a>
                    </nav>
                </div>

                {{-- My Wish List --}}
                <a class="nav-link" href="{{route('user.wishlist')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-cart-plus"></i></div>
                    My Wish List
                </a>

                {{-- My Order --}}
                <a class="nav-link" href="{{route('user.myorder')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-product-hunt"></i></div>
                    My Order
                </a>

                {{-- Wallet Transaction --}}
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#wallet_transaction"aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-money"></i></div>
                    Wallet Transaction
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="wallet_transaction" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#wallet_transaction" href="{{ route('user.d.wallet') }}">Transaction To D Wallet</a>
                        <a class="nav-link" data-parent="#wallet_transaction" href="{{ route('user.e.wallet') }}">Transaction To E Wallet</a>
                        <a class="nav-link" data-parent="#wallet_transaction" href="{{ route('user.d.wallet.report') }}">D Wallet Report</a>
                        <a class="nav-link" data-parent="#wallet_transaction" href="{{ route('user.e.wallet.report') }}">E Wallet Report</a>
                    </nav>
                </div>

                {{-- Withdraw --}}
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#withdraw"aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-money"></i></div>
                    Withdraw
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="withdraw" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#withdraw" href="{{ route('user.withdraw.company') }}">Company</a>
                        <a class="nav-link" data-parent="#withdraw" href="{{ route('user.withdraw.stockist') }}">Stockist</a>
                    </nav>
                </div>

                {{-- Statement --}}
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#statement"aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-money"></i></div>
                    Statement
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="statement" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#statement" href="{{ route('user.generationIncome') }}">Generation Income</a>
                        <a class="nav-link" data-parent="#statement" href="{{ route('user.incentive') }}">Incentive</a>
                        <a class="nav-link" data-parent="#statement" href="{{ route('user.reyality') }}">Reyality</a>
                        <a class="nav-link" data-parent="#statement" href="{{ route('user.salary') }}">Salary</a>
                        <a class="nav-link" data-parent="#statement" href="{{ route('user.tour') }}">Tour</a>
                    </nav>
                </div>

                {{-- Rank & Reward --}}
                <a class="nav-link" href="{{route('user.rank.reward')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-money"></i></div>
                    Rank & Reward
                </a>


                {{-- Stockist Point --}}
                <a class="nav-link" href="{{route('user.stockist.point')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-money"></i></div>
                    Stockist Point
                </a>

            </div>
        </div>
        {{-- <div class="sb-sidenav-footer">
             <div class="small">Logged in as:</div>
             Start Bootstrap
         </div>--}}
    </nav>
</div>
