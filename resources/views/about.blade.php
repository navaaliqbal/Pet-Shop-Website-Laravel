@extends('layouts.app') {{-- Extend a common layout --}}

@section('title', 'About Us') {{-- Set the page title --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('scripts') 
<script src="{{ asset('js/about.js') }}"></script>
@endsection

@section('content')
 <!-- About Us Section -->
 <div class="about-section" style="background-image:url('{{ asset('images/ABOUT.png')}}')">
    <div>
        <h1>ABOUT US</h1>
    </div>
</div>
<section id="hiddenDetails" style="display: none; margin-top: 30px; text-align: center;">
    <h2>Special Offers</h2>
    <p>Check out our exclusive discounts and promotional deals! ALSO ,"Congratulations, curious soul! You’ve discovered the secret behind our Bonsai Pets: each one is hand-crafted with love and a sprinkle of magic to bring joy into your home. Keep exploring—there’s always more than meets the eye!"</p>
</section> 
<section>
<div class="button-container">
  <button id="change-font-btn">Change Text Style</button>
  <button id="reset-font-btn">Reset Text Style</button>
  
  <button id="changeBgColorBtn">Background Color</button>
</div>
</section>
<!-- Our Mission Section -->

<div class="mission-section">
<div class="mission-container">
    <div class="mission-text">
        <h2>Our Mission</h2>
        <div class="mission-content">
            <p>At BonsaiPet, we believe that growing a business doesn't mean compromising values. Our mission is to provide exceptional grooming services that are not only good for your pets but also contribute positively to the community. We aim to combine compassion with excellence in pet care, ensuring that every pet we groom receives the highest level of comfort and attention. We understand that pets are family, and that's why we treat each one with love, care, and respect. Our goal is to create long-lasting relationships with both pets and their owners, fostering a sense of trust and satisfaction. Through our commitment to quality, innovation, and ethical practices, we strive to make a positive impact not only on the pets we care for but also on the environment and the communities we serve.</p>
        </div>
    </div>
    <div class="mission-image-container">
        <img src="images/pet love.jpg" alt="Founders with Pet" class="mission-image">
    </div>
</div>
</div>
<div class="team-section">
<h2>Meet Our Team</h2>
<p class="team-intro">Our team of dedicated professionals is passionate about providing the best care for your pets. Meet the experts who make BonsaiPet special.</p>
<div class="team-container">
    <div class="team-member">
        <img src="images/ayesha.jpg" alt="Team Member 1" class="team-image">
        <h3>Ayesha Siddiqa</h3>
        <p style="display:none">Founder & CEO</p>
    </div>
    <div class="team-member">
        <img src="images/AMNA.jpg" alt="Team Member 2" class="team-image">
        <h3>Amna Ahmed</h3>
        <p style="display:none">Head Groomer</p>
    </div>
    <div class="team-member">
        <img src="images/NAVAAL.jpg" alt="Team Member 3" class="team-image">
        <h3>Navaal Iqbal</h3>
        <p style="display:none">Customer Relations Manager</p>
    </div>
</div>
<div class="button-container">
<button id="showDetailsBtn" style="margin-top:20px;">Show Details</button>
  <button id="hideDetailsBtn" style="margin-top:20px;">Hide Details</button>
</div>
</div>


<!-- How Does OhMyPet Work? Section -->
<div class="how-it-works-section">
    <div class="how-it-works-container">
        <h2>How Does BonsaiPets Work?</h2>
        <div class="steps">
            <div class="step-card">
                <img src="images/location.png" alt="Location Icon">
                <h3>Select Your Location</h3>
                <p>Check out our list of locations to find your location. We have detailed information about the areas we are serving.</p>
            </div>
            <div class="step-card">
                <img src="images/booking.png" alt="Book Service Icon">
                <h3>Book Your Service</h3>
                <p>Book your service through the appointment form, call us, or simply send us a WhatsApp message.</p>
            </div>
            <div class="step-card">
                <img src="images/grooming (2).png" alt="Grooming Icon">
                <h3>Get It Groomed</h3>
                <p>Get your furry friend groomed by our experienced groomer at your location at the time provided by you.</p>
            </div>
        </div>
    </div>
</div>


    <!-- Statistics Section with Classic and Modern Style (No Cards) -->
    <div class="stats-section">
        <h2 class="stats-title">Our Numbers</h2>
        <div class="stats-container">
            <div class="stat-item classic-style">
                <h3>500+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat-item modern-style">
                <h3>4</h3>
                <p>Cities Served</p>
            </div>
            <div class="stat-item classic-style">
                <h3>50+</h3>
                <p>Professional Groomers</p>
            </div>
        </div>
    </div>
    <section id="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-slider">
            <div class="testimonial-slide">
                <div class="testimonial-card">
                    <div class="stars">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p>"I have a great experience with Oh My Pet. As it takes care of all rounder grooming of the pet. They have a good staff who actively working on the customer needs which has make the life of people very comfortable. I prefer everyone to take the experience of Oh My Pet once.
    
    "</p>
                    <h4>- Sarah J.</h4>
                </div>
    
                <div class="testimonial-card">
                    <div class="stars">
                        ⭐⭐⭐⭐☆
                    </div>
                    <p>"Very convenient and friendly staff. Highly recommend."</p>
                    <h4>- Mark T.</h4>
                </div>
    
                <div class="testimonial-card">
                    <div class="stars">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p>"Excellent online vet consultation. Quick and helpful."</p>
                    <h4>- Amanda B.</h4>
                </div>
                <div class="testimonial-card">
                    <div class="stars">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p>"The service was fantastic! My dog loves the grooming."</p>
                    <h4>- Sarah J.</h4>
                </div>
    
                <div class="testimonial-card">
                    <div class="stars">
                        ⭐⭐⭐⭐☆
                    </div>
                    <p>"Service is great. The person who came is so patient and handled my bubbles so carefully. Grooming and cutting is as per required. We can add our suggestions for cuttings. He cleaned area after grooming. I suggest is to we available and hold per to make pet comfort
    
                        "</p>
                    <h4>- Mark T.</h4>
                </div>
    
                <div class="testimonial-card">
                    <div class="stars">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p>"Excellent online vet consultation. Quick and helpful."</p>
                    <h4>- Amanda B.</h4>
                </div>
                <div class="testimonial-card">
                    <div class="stars">
                        ⭐⭐⭐⭐☆
                    </div>
                    <p>"Very convenient and friendly staff. Highly recommend."</p>
                    <h4>- Mark T.</h4>
                </div>
    
                <div class="testimonial-card">
                    <div class="stars">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p>"Excellent online vet consultation. Quick and helpful."</p>
                    <h4>- Amanda B.</h4>
                </div>
                <div class="testimonial-card">
                    <div class="stars">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <p>"The service was fantastic! My dog loves the grooming."</p>
                    <h4>- Sarah J.</h4>
                </div>
    
            </div>
        </div>
    </section>
@endsection