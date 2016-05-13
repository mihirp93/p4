<!DOCTYPE html>

<html>
  <head>
    <title>@yield('title','Personal Finance Tracker')</title>
    <meta charset='utf-8'>
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/bootstrap/flatly_bootstrap_min.css" rel="stylesheet" type="text/css"/>
    {{-- To yield any page specific CSS files or anything else in the head element --}}
    @yield('head')
  </head>
  <body>
    @yield('body_content')
    <div class="container">
      @yield('navbar')
      @yield('content')
   </div>
  </body>
</html>
