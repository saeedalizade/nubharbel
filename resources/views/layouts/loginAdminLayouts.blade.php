<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.png') }}" />
    <title>Elegant Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- page css -->
    <link href="{{ asset('admin/css/pages/login-register-lock.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.min.css') }}" rel="stylesheet" />
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('admin/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elegant admin</p>
    </div>
</div>

@yield('content')

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('admin/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('admin/node_modules/popper/popper.min.js')}}"></script>
<script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery.validate.js')}}"></script>
<!-- Popup message jquery -->
<script src="{{ asset('admin/node_modules/toast-master/js/jquery.toast.js') }}"></script>
{{--<script src="{{ asset('admin/js/myScript.js')}}"></script>--}}
@include('admin.js.allScriptAdmin');
<!--Custom JavaScript -->
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>
</body>

</html>