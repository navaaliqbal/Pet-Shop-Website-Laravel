<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- CSRF token for forms --}}
    <title>@yield('title', 'Bonsai Pets')</title> {{-- Dynamic page title --}}
    @yield('styles') {{-- Yield custom styles for specific pages --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Include CSS --}}
    <script src="{{ asset('js/app.js') }}" defer></script> {{-- Include JavaScript --}}
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/paws.png') }}" alt="Logo">
                <span>Bonsai Pets</span>
            </div>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('products.index') }}">Product</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>

    {{-- Main Content (This will change dynamically) --}}
    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer__addr">
          <h1 class="footer__logo">Bonsai Pets</h1>
          <h2>Contact</h2>
          <address>
            5534 Somewhere In The World 22193-10212<br>
            <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
          </address>
        </div>
        
        <ul class="footer__nav">
          <li class="nav__item">
            <h2 class="nav__title">Cities</h2>
            <ul class="nav__ul">
              <li><a href="#">Islamabad</a></li>
              <li><a href="#">Karachi</a></li>
              <li><a href="#">Multan</a></li>
            </ul>
          </li>
          
          <li class="nav__item nav__item--extra">
            <h2 class="nav__title">Quick Links</h2>
            <ul class="nav__ul nav__ul--extra">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About</a></li>
              <li><a href="{{ route('services') }}">Services</a></li>
              <li><a href="{{ route('products.index') }}">Product</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
          </li>
          
          <li class="nav__item">
            <h2 class="nav__title">Social Media</h2>
            <ul class="nav__ul">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">YouTube</a></li>
            </ul>
          </li>
        </ul>
        
        <div class="legal">
          <p>&copy; 2024 Bonsai Pets. All rights reserved.</p>
          <div class="legal__links">
            <span>Made with <span class="heart">♥</span> from SE-13B</span>
          </div>
        </div>
      </footer>

      @yield('scripts') {{-- Yield custome javascript for specific pages --}}


</body>

</html>
