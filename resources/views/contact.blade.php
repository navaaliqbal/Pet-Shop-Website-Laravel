@extends('layouts.app1') {{-- Extend a common layout --}}

@section('title', 'Conatact Us') {{-- Set the page title --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('scripts') 
<script src="{{ asset('js/contact.js') }}"></script>
@endsection


@section('content')
 <!-- Contact Section -->
 <div class="contact-section">
    <div class="contact-header">
        <h1>Contact Us</h1>
        
    </div>

    <div class="contact-container">
        <div class="general-inquiries">
            <h2 class="general-heading">GENERAL INQUIRIES</h2>
            <p>Do you have any questions or just want to say hello? We'd love to hear from you!</p>
            <p><a href="mailto:info@bonsaipets.in">info@bonsaipets.in</a></p>
            <p>+92-123456789</p>
            <img src="images/contact.jpg" alt="Dog grooming" class="inquiries-image">
            
        </div>

        <div class="contact-form">
          <h2>Get Into Touch</h2>
          <form action="#" method="POST">
              <label for="name">Name *</label>
              <input type="text" id="name" name="name" required>
      
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" required>
      
              <label for="phone">Phone *</label>
              <input type="tel" id="phone" name="phone" required>
      
              <label for="pet-type">Select Pet Type *</label>
              <select id="pet-type" name="pet-type" required>
                  <option value="" disabled selected>Select your pet type</option>
                  <option value="cat">Cat</option>
                  <option value="dog">Dog</option>
                  <option value="parrot">Parrot</option>
              </select>
      
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject">
      
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" maxlength="180"></textarea>
      
              <p class="char-count">0 / 180</p>
      
              <button type="submit" class="send-btn">Submit</button>
          </form>
      </div>
      
    </div>
</div>

@endsection