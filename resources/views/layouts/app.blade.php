<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('page-title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  
<!-- header -->
<header>@include('partials._navbar')</header>

<!-- jumbotron -->
<section class="jumbotron"> @include('partials._jumbotron')</section>

<!-- main -->
<main>@yield('main')</main>

<!-- products-section -->

<section>@include('partials._buy_products')</section>

<footer>@include('partials._footer')</footer>



</body>

</html>