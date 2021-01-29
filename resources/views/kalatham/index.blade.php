<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Kalatham</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Stylesheet -->

    <link rel="stylesheet" href="{{asset('/kalathams/css/elegant-icon.css')}}">
    <link rel="stylesheet" href="{{asset('kalathams/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('kalathams/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('kalathams/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('kalathams/css/classy-nav.css')}}">
    <link rel="stylesheet" href="{{asset('kalathams/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('kalathams/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/kalathams/css/style.css')}}">
    @extends('kalatham.styling.jskalatham')
</head>
<body>
    @extends('kalatham.component.loading')
    @extends('kalatham.component.footer')
    @extends('kalatham.component.contact')
    @extends('kalatham.component.portfolio')
    @extends('kalatham.component.subscribe')
    @extends('kalatham.component.aboutus')
    {{-- @extends('kalatham.component.services') --}}
    @extends('kalatham.component.headerTitle')
    @extends('kalatham.component.header')
</body>
</html>

