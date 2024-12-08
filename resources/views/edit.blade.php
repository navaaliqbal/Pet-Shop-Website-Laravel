<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- CSRF token for forms --}}
    <link rel="stylesheet" href="{{ asset('css/create.css') }}"> {{-- Include CSS --}}
</head>
<body>
<div class="container">
    <h1>Edit Product</h1>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form to update the product -->
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="category">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $product->category) }}">
        </div>

        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}">
        </div>

        <button type="submit" class="btn btn-success">Update Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
