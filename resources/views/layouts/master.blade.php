<!DOCTYPE html>

<html>
  <head>
    <title>@yield('title','Finance Management App')</title>
    <meta charset='utf-8'>
    {{-- To yield any page specific CSS files or anything else in the head element --}}
    @yield('head')
  </head>
  <body>
    @yield('content')
  </body>
</html>
