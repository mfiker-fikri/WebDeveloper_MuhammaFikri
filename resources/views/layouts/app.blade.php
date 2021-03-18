<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Muhammad Fikri">
    <meta name="keywords" content="">
    <meta name="generator" content="">

    <!-- Title Page-->
    <title>CRUD Laravel Contoh</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="icon" href="{{asset('/favicon/journalist.png')}}" sizes="180x180" type="image/png">
    <link rel="icon" href="{{asset('/favicon/journalist.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{asset('/favicon/journalist.png')}}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{asset('/favicon/journalist.png')}}">
    <meta name="theme-color" content="#7952b3">

    <!-- Beranda CSS -->
    <link rel="stylesheet" href="{{asset('/css/beranda/beranda.css')}}">

    
</head>

<body>

    <!-- header -->
    @section('header')
        @include('layouts.template.beranda.header')
    @show
    
    <!-- main -->
    @yield('content')

    <!-- Footer -->
    @section('footer')
        @include('layouts.template.beranda.footer')
    @show


    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        -->

        <div id="extwaiokist" style="display:none" v="dhnib" q="40c475a1" c="238.8" i="243" u="62.54" s="03102117" d="0" w="false" e="" m="BMe=">
            <div id="extwaiimpotscp" style="display:none" v="dhnib" q="40c475a1" c="238.8" i="243" u="62.54" s="03102117" d="0" w="false" e="" m="BMe=" vn="3down">
            </div>
        </div>
    </body>
</html>