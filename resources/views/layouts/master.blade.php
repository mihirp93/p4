<!DOCTYPE html>

<html>
  <head>
    <title>@yield('title','Finance Manager')</title>
    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
