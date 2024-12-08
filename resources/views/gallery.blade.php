@extends('layouts.app') {{-- Extend a common layout --}}

@section('title', 'Gallery') {{-- Set the page title --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@endsection

@section('scripts') 
<script src="{{ asset('js/gallery.js') }}"></script>
@endsection

@section('content')
<!-- Hero Section -->
<style>

.hero-section {
    position: relative;
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    background-size: cover;
    background-position: center;
    animation: backgroundSlide 15s infinite; /* Animation lasts 15 seconds and loops infinitely */
    margin-top: 70px; /* Space for the navbar */
}
/* Keyframes to switch background images */
@keyframes backgroundSlide {
    0% {
        background-image: url('images/bg-1.jpg'); /* First image */
    }
    33% {
        background-image: url('images/bg-2.jpg'); /* Second image */
    }
    66% {
        background-image: url('images/bg-3.jpg'); /* Third image */
    }
    100% {
        background-image: url('images/bg-1.jpg'); /* Loop back to first image */
    }
}
    </style>

<section class="hero-section">
    <div class="hero-content">
        <h1>Explore Our Stunning Gallery</h1>
        <h2>Step into a world of beautiful visuals.</h2>
                <!-- Buttons for changing and resetting font -->
                <div class="button-container">
                  <button id="change-font-btn">Change Text Style</button>
                  <button id="reset-font-btn">Reset Text Style</button>
                  <button id="showDetailsBtn">Show Details</button>
                  <button id="hideDetailsBtn">Hide Details</button>
              </div>
      
    </div>
</section>
<section class="details-section">
  

  <div id="hiddenDetails" style="display: none; margin-top: 20px; background-color: #f9f9f9; padding: 20px; border-radius: 10px;">
      <h2>Hidden Treasures of the Bonsai Pet World</h2>
      <p>"Welcome, intrepid explorer! You’ve stumbled upon a hidden corner of our pet gallery. Here, we celebrate the secrets and stories of our tiniest companions that few ever see. Did you know that each Bonsai Pet is whispered to be a guardian of ancient wisdom? From the silent patience of our micro-kittens to the curious mischief of our pocket-sized pups, every Bonsai Pet holds a secret personality trait waiting to be discovered by a loving owner. Look closely, and you might just catch a glimpse of their magical world!"
        
        </p>
  </div>
</section>


    <!-- Gallery Section -->
    <section class="gallery">
        <div class="gallery-item">
            <div class="image-grid">
                <img src="images/1.jpg" alt="Gallery Image 1">
                <img src="images/2.jpg" alt="Gallery Image 2">
                <div class="text-content">
                    <h2>Cuteness overload: Proceed with caution!</h2>
                    <p>Flying high on wings of cuteness!</p>
                </div>
                <img src="images/3.jpg" alt="Gallery Image 3">
                <img src="images/4.jpg" alt="Gallery Image 4">
            </div>
        </div>
        
        <div class="gallery-item alternate">
            <div class="image-grid">
                <img src="images/5.jpg" alt="Gallery Image 5">
                <img src="images/6.jpg" alt="Gallery Image 6">
                <div class="text-content">
                    <h2>Fluffy, feathery, and full of love!</h2>
                    <p>Too cute to be fur-gotten!</p>
                </div>
                <img src="images/7.jpg" alt="Gallery Image 7">
                <img src="images/8.jpg" alt="Gallery Image 8">
            </div>
        </div>
        <div class="gallery-item alternate">
            <div class="image-grid">
                <img src="images/9.jpg" alt="Gallery Image 5">
                <img src="images/10.jpg" alt="Gallery Image 6">
                <div class="text-content">
                    <h2>Ready to fetch some joy?</h2>
                    <p>Pawsitive vibes only!</p>
                </div>
                <img src="images/11.jpg" alt="Gallery Image 7">
                <img src="images/12.jpg" alt="Gallery Image 8">
            </div>
        </div>
        <div class="gallery-item alternate">
            <div class="image-grid">
                <img src="images/13.jpg" alt="Gallery Image 5">
                <img src="images/14.jpg" alt="Gallery Image 6">
                <div class="text-content">
                    <h2>Meowgical moments, captured forever.</h2>
                    <p>Fur real, could they be any cuter?</p>
                </div>
                <img src="images/15.jpg" alt="Gallery Image 7">
                <img src="images/16.jpg" alt="Gallery Image 8">
            </div>
        </div>
        <!-- More items can be added similarly -->
    </section>
@endsection
