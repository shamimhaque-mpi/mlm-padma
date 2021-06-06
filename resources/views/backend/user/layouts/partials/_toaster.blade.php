<script src="{{asset('public/backend/plugins/toastr/js/toastr.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('public/backend/plugins/toastr/css/toastr.min.css')}}">

<style>
    .toast {
        opacity: 1 !important;
    }
    #toast-container>div{
        box-shadow: none !important;
    }
</style>

<script>

    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}", "Success");
    @endif

    @if(Session::has('update'))
    toastr.success("{{ Session::get('update') }}", "Update");
    @endif

    @if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}", "Info");
    @endif

    @if(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}", "Warning");
    @endif

    @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}", "Error");
    @endif

    @if(Session::has('delete'))
    toastr.error("{{ Session::get('delete') }}", "Delete");
    @endif

        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
