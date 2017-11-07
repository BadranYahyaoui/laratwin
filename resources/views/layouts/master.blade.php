<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href={{ asset('assets/img/apple-icon.png') }}>

    <link rel="icon" type="image/png" href= {{ asset('./assets/img/favicon.png') }}>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    {{--@yield('title')--}}
    <title>head</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href={{asset('assets/css/bootstrap.min.css')}} rel="stylesheet" />
    <link href="" rel="stylesheet" />
    <link  href={{asset('assets/css/material-kit.css')}} rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href={{asset('assets/css/demo.css')}} rel="stylesheet" />


</head>
<body style="background-color: white">
@include('partial.header')


<div class="section">
    <div class="container">
        <div>
            <br>
            <br>
            <br>
            <br>
            <br>
            @yield('content')
            <br>
            <br>
            <br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <br><br>
            <br>
            <br>
            <br>

        </div>





</div>
</div>
<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="http://www.badran-yahyaoui.info">
                        Creative Badran
                    </a>
                </li>
                <li>
                    <a href="http://www.badran-yahyaoui.info">
                        About Me
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2050, made with <i class="fa fa-heart heart"></i> by Creative Badran
        </div>
    </div>
</footer>

</body>
<!--   Core JS Files   -->
<script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
<script src={{ asset('assets/js/bootstrap.min.js') }} ></script>
<script src={{ asset('assets/js/material.min.js') }}></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src={{ asset('assets/js/nouislider.min.js') }} type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src={{ asset('assets/js/bootstrap-datepicker.js') }} type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src={{ asset('assets/js/material-kit.js') }} type="text/javascript"> </script>

<script type="text/javascript">

    $().ready(function(){
        // the body of this function is in assets/material-kit.js
        materialKit.initSliders();
        window_width = $(window).width();

        if (window_width >= 992){
            big_image = $('.wrapper > .header');

            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
        }

    });
</script>

</html>
