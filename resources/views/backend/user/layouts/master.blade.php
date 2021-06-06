@include('backend.user.layouts.partials._header')

@include('backend.user.layouts.partials._navbar')

<div id="layoutSidenav">

    @include('backend.user.layouts.partials._leftsidebar')

    <div id="layoutSidenav_content">

        <main>
            @yield('content')
        </main>

    </div>

</div>

@include('backend.user.layouts.partials._footer')



