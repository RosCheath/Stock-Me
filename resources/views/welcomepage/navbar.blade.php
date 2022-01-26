 <!-- ======= Header ======= -->
 <header id="header">
    <div class="container">

      <h1><a>Stock Management</a></h1>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          @if(Auth::user())
          <li><a class="nav-link" href="{{route('login')}}">Home</a></li>
          
          @else
          <li><a class="nav-link" href="{{route('login')}}">Sign In</a></li>
          <li><a class="nav-link" href="{{ route('register') }}">Sign Up</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->