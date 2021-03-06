<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="/imgs/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/master.css" media="screen" title="no title">
    {{-- <link rel="stylesheet" href="/css/app.css" media="screen" title="no title"> --}}
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    @yield('styles')
  </head>
  <body class="@yield('bodyname')">
    @include('header')
    <main id="main">
    <div class="container ">
    @yield('contenido')
    </div>
  </main>
  @include('footer')
  <script src="/js/scroll.js" charset="utf-8"></script>
  <script src="/js/nav.js" charset="utf-8"></script>
  </body>
</html>
