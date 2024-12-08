@extends('layouts.app') {{-- Extend a common layout --}}

@section('title', 'Products') {{-- Set the page title --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection

@section('scripts') 
<script src="{{ asset('js/products.js') }}"></script>
@endsection

@section('content')
<section>
    <div class="center-section">
        <h1 class="products-heading" style="margin-top: 100px;" id="dynamicText">Check Out Our Products</h1>
        <!-- Buttons for changing and resetting text style -->
    </div>
  </section> 
  
    <section id="hiddenDetails" style="display: none; margin-top: 20px; text-align: center;">
      <h2>Special Offers</h2>
      <p>Check out our exclusive discounts and promotional deals! ALSO ,"Congratulations, curious soul! You’ve discovered the secret behind our Bonsai Pets: each one is hand-crafted with love and a sprinkle of magic to bring joy into your home. Keep exploring—there’s always more than meets the eye!"</p>
  </section>
  <section>
  <div class="button-container">
   
    <button id="showDetailsBtn">Show Details</button>
    <button id="hideDetailsBtn">Hide Details</button>
    <button id="changeBgColorBtn">Background Color</button>
  </div>
  </section>
  
   <!-- Products heading -->
  <!-- <section>
      <div class="container1">
        <h1 class="products-heading" style="margin-top: 100px;">Check Out Our Products</h1> 
      </div>
  </section> -->
  
      <!-- Animal Category Navigation (Clickable Images) -->
      <section class="animal-navigation">
          <a href="#cats">
              <img src="images/cat.jpg" alt="Cats" />
              <h3>Cats</h3>
          </a>
          <a href="#dogs">
              <img src="images/dog.jpg" alt="Dogs" />
              <h3>Dogs</h3>
          </a>
          <a href="#bird">
              <img src="images/bird.jpg" alt="Birds" />
              <h3>Birds</h3>
          </a>
      </section>
  
      <!-- Bonsai Cats Section -->
      <section id="cats" class="animal-section">
          <h2>Find Your Next Pawsome Friend</h2>
          <div class="pricing-table">
              <!-- Bonsai Kitten -->
              <div class="pricing-item">
                  <img src="images/cat-1.jpg" alt="Bonsai Kitten">
                  <h3>Bombay Kitten</h3>
                  <p>$300</p>
              </div>
              <div class="pricing-item">
                  <img src="images/cat-2.jpg" alt="Bonsai Kitten">
                  <h3>Birman Kitten</h3>
                  <p>$200</p>
              </div>
              <div class="pricing-item">
                  <img src="images/cat-3.jpg" alt="Bonsai Kitten">
                  <h3>British Shorthair Kitten</h3>
                  <p>$250</p>
              </div>
              <div class="pricing-item">
                  <img src="images/cat-4.jpg" alt="Bonsai Kitten">
                  <h3>Persian Kitten</h3>
                  <p>$270</p>
              </div>
          </div>
      </section>
  
      <!-- Bonsai Dogs Section -->
      <section id="dogs" class="animal-section">
          <h2>Fetch Your Furry Bestie</h2>
          <div class="pricing-table">
              <!-- Bonsai Dog -->
              <div class="pricing-item">
                  <img src="images/dog-1.jpg" alt="Bonsai Dog">
                  <h3>Bulldog Dog</h3>
                  <p>$350</p>
              </div>
              <div class="pricing-item">
                  <img src="images/dog-2.jpg" alt="Bonsai Dog">
                  <h3>Beagle Dog</h3>
                  <p>$300</p>
              </div>
              <div class="pricing-item">
                  <img src="images/dog-3.jpg" alt="Bonsai Dog">
                  <h3>Poodle Dog</h3>
                  <p>$250</p>
              </div>
              <div class="pricing-item">
                  <img src="images/dog-4.jpg" alt="Bonsai Dog">
                  <h3>Golden Retriever Dog</h3>
                  <p>$310</p>
              </div>
          </div>
      </section>
  
      <!-- Bonsai Birds Section -->
      <section id="bird" class="animal-section">
          <h2>Feathered Friends Await</h2>
          <div class="pricing-table">
              <!-- Bonsai Bird -->
              <div class="pricing-item">
                  <img src="images/bird-1.jpg" alt="Bonsai Bird">
                  <h3>Canaries</h3>
                  <p>$150</p>
              </div>
              <div class="pricing-item">
                  <img src="images/bird-2.jpg" alt="Bonsai Bird">
                  <h3>Cockateil</h3>
                  <p>$120</p>
              </div>
              <div class="pricing-item">
                  <img src="images/bird-3.jpg" alt="Bonsai Bird">
                  <h3>DOVE</h3>
                  <p>$170</p>
              </div>
              <div class="pricing-item">
                  <img src="images/bird-4.jpg" alt="Bonsai Bird">
                  <h3>Parakeets</h3>
                  <p>$200</p>
              </div>
  
          </div>
      </section>
  
       <!-- Header Section -->
  <section class="pet-header">
      <h1>"Create, Craft, and Pamper Your Pet with Fun DIY Kits!"</h1>
  </section>
  
      <section class="pet-services-section" id="services">
          <div class="pet-services-container">
              <!-- Service 1 -->
              <div class="pet-service-box">
                  <img src="images/catdiy.jpeg" alt="DIY Cat Tent">
                  <h3>DIY Cat Tent</h3>
              </div>
      
              <!-- Service 2 -->
              <div class="pet-service-box">
                  <img src="images/DIY Pet Hammock.jpeg" alt="DIY Pet Hammock">
                  <h3>DIY Pet Hammock</h3>
              </div>
      
              <!-- Service 3 -->
              <div class="pet-service-box">
                  <img src="images/Catnip Toy.jpeg" alt="Catnip Toy">
                  <h3>Catnip Toy</h3>
              </div>
               
              <div class="pet-service-box">
                  <img src="images/No-Sew Dog Bed.jpeg" alt="No-Sew Dog Bed">
                  <h3>No-Sew Dog Bed</h3>
              </div>
          </div>
  
      </section>
      <div class="d-flex flex-column align-items-center text-center containerTable">
        <!-- Flex container for heading and button -->
            <h1 class="mb-0">Product List</h1>
            <a href="{{ route('products.create') }}" class="btn btn-primary" style="margin-top:20px;">Add New Product</a>
    </div>
        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        {{-- Table displaying products --}}
<div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm" style="margin:5px;">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="margin: 5px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection