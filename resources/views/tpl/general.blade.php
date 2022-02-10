

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> --}}
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    {{-- <link rel="stylesheet" href="../css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" href="../css/themify-icons.css"> --}}
    <link rel="stylesheet" href="../css/nice-select.css">
    {{-- <link rel="stylesheet" href="../css/flaticon.css"> --}}
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

 






            

    {{-- @isset($Ndate)
    {{dd($Ndate)}}
        @foreach ($Ndate as $item)
            <li><a href="Event.html">{{$item->name}}</a></li>
        @endforeach 
    @endisset --}}
    <!-- header-end -->
    @include('tpl.header')
    @yield('contant')
    @include('tpl.footer')



    <!-- JS here -->
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/jquery.slicknav.min.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>