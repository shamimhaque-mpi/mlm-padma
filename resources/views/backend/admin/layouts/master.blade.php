@include('backend.admin.layouts.partials._header')

@include('backend.admin.layouts.partials._navbar')

<div id="layoutSidenav">

    @include('backend.admin.layouts.partials._leftsidebar')

    <div id="layoutSidenav_content">

        <main>
            @yield('content')
        </main>

    </div>

</div>

@include('backend.admin.layouts.partials._footer')



