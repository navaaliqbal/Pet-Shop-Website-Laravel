@extends('layouts.app') {{-- Extend a common layout --}}

@section('title', 'Pet Shop') {{-- Set the page title --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection

@section('content')

<section id="hero" style="background-image: url('{{ asset('images/pets-3715733_1280.jpg') }}');">
    <div class="hero-content">
        <h1>Welcome to Bonsai Pet</h1>
        <p>Premium Care for Your Furry Friends</p>
        <!-- Arrow button -->
        <div class="arrow-container">
            <a href="#about-us"><span class="arrow"></span></a>
        </div>
    </div>
</section>

    <section id="hiddenDetails" style="display: none; margin-top: 30px; text-align: center;">
      <h2>Special Offers</h2>
      <p>Check out our exclusive discounts and promotional deals! ALSO ,"Congratulations, curious soul! You’ve discovered the secret behind our Bonsai Pets: each one is hand-crafted with love and a sprinkle of magic to bring joy into your home. Keep exploring—there’s always more than meets the eye!"</p>
  </section> 
  <section>
  <div class="button-container">
    
    <button id="showDetailsBtn">Show Details</button>
    <button id="hideDetailsBtn">Hide Details</button>
    <button id="changeBgColorBtn">Background Color<span class="badge">Change Background Color for About Us section</span></button>
  </div>
  </section>
<section id="about-us" class="about-section">

    <div class="about-content">
        <!-- Left Section -->
        <div class="about-text">
            <h2>About Us</h2>
            <p>
              Welcome to Bonsai Pet Shop, your trusted partner in caring for your furry, feathered, and scaly friends! 
              Established with a love for animals, we provide a wide variety of high-quality pet products, from food and toys 
              to grooming essentials, ensuring your pets live happy, healthy lives.
            </p>
           <p>With our passion for pets and commitment to customer satisfaction, we aim to make pet ownership as fulfilling 
            and easy as possible. Thank you for choosing Bonsai Pet Shop - where pet care meets excellence!</p>
            <a href="{{ route('about') }}" class="learn-more-btn">Learn More</a>
        </div>
        
        <!-- Right Section (Image) -->
        <div class="about-image">
            <img src="images/Screenshot 2024-10-12 175259.png" alt="About Us Image">
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services">
<h2>Explore Our Pet Grooming Services</h2>
<div class="service-container">
    <div class="service">
        <img src="images/dog-training.webp" alt="Dog Training">
        <h3>Dog Training At Home</h3>
    </div>
    <div class="service">
        <img src="images/vet-consultation.webp" alt="Online Vet Consultation">
        <h3>Online Vet Consultation</h3>
    </div>
    <div class="service">
        <img src="images/pet-vaccination.webp" alt="At Home Pet Vaccination">
        <h3>At Home Pet Vaccination</h3>
    </div>
</div>
<div class="explore-services">
    <button onclick="window.location.href='{{ route('services') }}'">Services</button>
</div>
</section>
<section class="promo-section" style="background-image: url('{{ asset('images/Screenshot 2024-10-13 155133.png') }}');">
<div class="promo-content">
    <h1>Save 20% On Your First Order!</h1>
    <p>Subscribe and stay updated with our latest news and offers for your pets.</p>
    <button class="shop-btn" onclick="location.href='{{ route('products.index') }}'">Shop Here</button>
</div>
</section>

<!-- Testimonial Section -->
<section id="testimonials">
    <h2>What Our Clients Say</h2>
    <div class="testimonial-slider">
        <div class="testimonial-slide">
            <div class="testimonial-card">
                <div class="stars">
                    ⭐⭐⭐⭐⭐
                </div>
                <p>"I recently bought a kitten from Bonsai Pet, and the whole experience was amazing! The staff is so knowledgeable, and they guided me through every step of how to care for my new pet. The grooming services are also excellent."</p>
                <h4>- Ayesha Khan, Karachi</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars">
                    ⭐⭐⭐⭐☆
                </div>
                <p>"Bonsai Pet is my go-to place for everything my dog needs. From grooming services to purchasing pet food and toys, they have it all. I even bought my dog, Simba, here. Highly recommend it!"</p>
                <h4>- Ahmed Raza, Lahore</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars">
                    ⭐⭐⭐⭐⭐
                </div>
                <p>"I was so happy to find a healthy pair of birds at Bonsai Pet. The staff helped me pick the best cage and gave me all the necessary instructions. Their vet services are also top-notch!"</p>
                <h4>- Saira Malik, Islamabad</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars">
                    ⭐⭐⭐⭐⭐
                </div>
                <p>"Bonsai Pet is a fantastic place to not only get grooming services but also purchase pets. I got my dog, Bruno, from here, and they’ve been great with grooming and care ever since."</p>
                <h4>- Ali Shah, Multan</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars">
                    ⭐⭐⭐⭐☆
                </div>
                <p>"I bought a pair of kittens from Bonsai Pet, and the process was smooth and hassle-free. The staff was so helpful and answered all my questions. Their mobile grooming service is also very convenient."</p>
                <h4>- Sana Javed, Karachi</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars">
                    ⭐⭐⭐⭐⭐
                </div>
                <p>"I purchased a Persian cat from Bonsai Pet, and I couldn't be happier! They helped me choose the right food and accessories, and their after-purchase support is incredible."</p>
                <h4>- Fatima Hassan, Islamabad</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars">
                    ⭐⭐⭐⭐⭐
                </div>
                <p>"Bonsai Pet is where I found my perfect pet. The staff is incredibly knowledgeable and helped me choose the best pet for my lifestyle. They also offer great grooming services!"</p>
                <h4>- Bilal Ahmed, Lahore</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars">
                    ⭐⭐⭐⭐⭐
                </div>
                <p>"I bought my puppy from Bonsai Pet, and I was so impressed with their customer service. They provided me with all the necessary supplies and gave me great advice on how to care for my new pet."</p>
                <h4>- Zara Qureshi, Multan</h4>
            </div>
            <div class="testimonial-card">
                <div class="stars">
                    ⭐⭐⭐⭐☆
                </div>
                <p>"Whether it's purchasing a pet or getting grooming services, Bonsai Pet has been my favorite place. The staff is so caring, and they always ensure my pets get the best treatment."</p>
                <h4>- Usman Tariq, Karachi</h4>
            </div>
        </div>
    </div>
    <div class="button-container">
    <button id="change-font-btn">Change Text Style</button>
    <button id="reset-font-btn">Reset Text Style</button>
</div>
</section>
@endsection
