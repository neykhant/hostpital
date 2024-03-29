<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Hospital Management-@yield('title') </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("vendor/bootstrap/css/bootstrap.min.css")  }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset("css/blog-home.css") }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item  {{Request::is('/') ? 'active' : ' '}}">
              <a class="nav-link" href="{{ url('/')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item {{Request::is('about') ? 'active' : ' '}}">
              <a class="nav-link" href="{{ url('/about')}}">About</a>
            </li>
            <li class="nav-item  {{Request::is('doctor')? 'active' : ' ' }}">
              <a class="nav-link" href="{{ url('/doctor')}}">Doctors</a>
            </li>
            <li class="nav-item {{Request::is('contact')? 'active' : ' ' }}">
              <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/userlogin')}}">UserLogin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/signup')}}">Signup</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        @yield ('content')

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Our Website 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
