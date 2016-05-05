<!DOCTYPE html>

<html>
  <head>
    <title>@yield('title','Profile')</title>
    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/styles.css" rel="stylesheet" type="text/css"/>
    @yield('head')
  </head>
  <body>
     <div class='profile_sidebar'>
      <img src='http://www.fashatude.com/static/fashatude/img/user_icon.png' alt='user image' width='300' height='300'/>
      <h4>{{ $user->name }}</h4>
      <h4>{{ $user->email }}</h4>
      <ul class="nav nav-sidebar">
       <li><a href="#">See All Transactions</a></li>
       <li><a href="#">Add Transaction</a></li>
      </ul>
   </div>
    <div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Personal Finance Manager</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
   </div>
  </body>
</html>
