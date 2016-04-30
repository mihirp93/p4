<!DOCTYPE html>

<html>
  <head>
    <title>@yield('title','Finance Management App')</title>
    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    {{-- To yield any page specific CSS files or anything else in the head element --}}
    @yield('head')

  </head>
  <body>
    <div class="container">
      @yield('content')
   </div>
  </body>
</html>
