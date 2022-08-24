

<script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-library.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/themefunction.js')}}"></script>
<script src="{{asset('assets/js/toastr.js')}}"></script>



<script>
    $(document).on('click','#toggle_pwd',function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
        $("#password").attr("type", type);
    })
</script>
