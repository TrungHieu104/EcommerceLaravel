<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>HONO @yield('title') </title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/ionicons.css">
    <link rel="stylesheet" href="/assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="/assets/css/vendor/jquery-ui.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="/assets/css/plugins/venobox.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="/assets/css/plugins/aos.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/assets/css/style.min.css"> -->

</head>

<body>

    @include('component.client.header')

        <main>
            @yield('content')
        </main>

    @include('component.client.footer')

 





<!-- ::::::::::::::All JS Files here :::::::::::::: -->
<!-- Global Vendor, plugins JS -->
<script src="/assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="/assets/js/vendor/popper.min.js"></script>
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="/assets/js/vendor/jquery-ui.min.js"></script>

<!--Plugins JS-->
<script src="/assets/js/plugins/swiper-bundle.min.js"></script>
<script src="/assets/js/plugins/material-scrolltop.js"></script>
<script src="/assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="/assets/js/plugins/jquery.zoom.min.js"></script>
<script src="/assets/js/plugins/venobox.min.js"></script>
<script src="/assets/js/plugins/jquery.waypoints.js"></script>
<script src="/assets/js/plugins/jquery.lineProgressbar.js"></script>
<script src="/assets/js/plugins/aos.min.js"></script>
<script src="/assets/js/plugins/jquery.instagramFeed.js"></script>
<script src="/assets/js/plugins/ajax-mail.js"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <script src="/assets/js/vendor/vendor.min.js"></script>
<script src="/assets/js/plugins/plugins.min.js"></script> -->

<!-- Main JS -->
<script src="/assets/js/main.js"></script>
</body>


</html>