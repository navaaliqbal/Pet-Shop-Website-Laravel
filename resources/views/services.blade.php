@extends('layouts.app') {{-- Extend a common layout --}}

@section('title', 'Services') {{-- Set the page title --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section('scripts') 
<script src="{{ asset('js/services.js') }}"></script>
@endsection

@section('content')

<img src="images/krista-mangulsone-9gz3wfHr65U-unsplash.jpg" alt="Pet Grooming" class="main-image"> 
     <header class="header">
      <h1>Affordable Pet Grooming Services in Your City</h1>
      <div class="buttons">
          <a href="contact.html" class="book-btn" target="_blank" rel="noopener noreferrer">Contact Us</a>
      </div>
      <div class="additional-buttons">
          <button id="change-bg-btn">Change Background Color</button>
          <button id="change-text-style-btn">Change Text Style</button>
          <button id="reset-text-style-btn">Reset Text Style</button>
         
      </div>
  </header>

  <!-- At Home Pet Grooming Section -->
  <section class="services-section">
      <h2>At Home Pet Grooming Services</h2>
      <p id="description">
          Discover the ultimate convenience of at-home pet grooming! At Oh My Pet, we bring expert grooming services
          right to your doorstep, ensuring your furry friends receive the pampering they deserve without the stress
          of travel. Our dedicated professionals handle everything from bathing and trimming to nail clipping and
          ear cleaning, all tailored to your pet’s specific needs.
      </p>

      <!-- Cities Section -->
      <div class="city-services">
          <div class="city">
              <img src="images/multan.jpeg" alt="multan" />
              <h3>Pet Grooming in Multan</h3>
              <p class="city-details" style="display: none;">Our Multan team provides comprehensive pet care, including grooming, nail trimming, and spa treatments.</p>
          </div>
          <div class="city">
              <img src="images/lhr.jpg" alt="lhr" />
              <h3>Pet Grooming in Lahore</h3>
              <p class="city-details" style="display: none;">Our Lahore branch offers expert haircuts, de-stressing massages, and anti-tick treatments.</p>
          </div>
          <div class="city">
              <img src="images/karachi.JPG" alt="karachi" />
              <h3>Pet Grooming in Karachi</h3>
              <p class="city-details" style="display: none;">In Karachi, we ensure your pet feels pampered with our professional and caring grooming team.</p>
          </div>
          <div class="city">
              <img src="images/isl.jpeg" alt="isl" />
              <h3>Pet Grooming in Islamabad</h3>
              <p class="city-details" style="display: none;">Islamabad services focus on top-notch grooming, including spa baths and stylish haircuts.</p>
          </div>
      </div>
      <div class="additional-buttons">
      <button id="show-details-btn" style="margin-top:20px; background-color: darkslategrey; color:azure">Show Details</button>
      <button id="hide-details-btn" style="margin-top:20px; background-color: darkslategrey; color:azure">Hide Details</button>
    </div>
  </section>
    
        <!-- Services Section -->
        <section class="pet-services-section" id="services">
            <header class="pet-header">
                <h1>Explore Our Pet Grooming Services for Your Pet</h1>
            </header>
    
            <div class="pet-additional-services-container">
                <div class="pet-additional-service-box">
                    <img src="images/spa-bath.png" alt="Spa Bath">
                    <h4>Spa Bath</h4>
                </div>
                <div class="pet-additional-service-box">
                    <img src="images/ear-cleaning1.webp" alt="Knots/Mats Removal">
                    <h4>Knots/Mats Removal</h4>
                </div>
                <div class="pet-additional-service-box">
                    <img src="images/grooming.png" alt="Full Grooming">
                    <h4>Full Grooming</h4>
                </div>
                <div class="pet-additional-service-box">
                    <img src="images/nail-clipper.png" alt="Nail Clipping">
                    <h4>Nail Clipping</h4>
                </div>
                <div class="pet-additional-service-box">
                    <img src="images/styling.png" alt="Stylish Hair Cuts">
                    <h4>Stylish Hair Cuts</h4>
                </div>
                <div class="pet-additional-service-box">
                    <img src="images/anti-tick.png" alt="Anti-Tick Treatment">
                    <h4>Anti-Tick Treatment</h4>
                </div>
                <div class="pet-additional-service-box">
                    <img src="images/destressing.png" alt="De-Stressing Massage">
                    <h4>De-Stressing Massage</h4>
                </div>
            </div>
            <div id="details-section" style="display: none;">
                <p>
                    Our services are curated to suit your pet's unique needs, offering everything from stylish haircuts to
                    soothing de-stressing massages.
                </p>
            </div>
        </section>
  
    
@endsection