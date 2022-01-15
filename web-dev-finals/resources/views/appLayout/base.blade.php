<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @yield('cssLinks')
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>To Do List</title>
  </head>
  <body id="main-page">
    <nav>
      <input type="checkbox" id="check">
      <label class='checkmo'for="check">
        <i class="fa fa-bars"></i>
      </label>
      <a href="index.html"><img class="logo" src="{{ asset('/images/temp-logo.png') }}" alt="logo"></a>
      <ul>
        <li><a href="/login" class="nav">Login</a></li>
        <li><a class="nav" href="/">Home</a></li>
        <li><a class="nav" href="/about">About</a></li>
        <li><a class="nav" href="/us">Us</a></li>
        <li><a href="/signup" class="nav">Signup</a></li>
      </ul>
    </nav>
    
    @yield('content')


  </body>
  @yield('script')
  
</html>
