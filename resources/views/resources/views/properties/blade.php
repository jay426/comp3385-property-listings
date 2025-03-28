<!-- resources/views/properties/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Property</h1>
    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="bedrooms" class="form-label">Number of Bedrooms</label>
            <input type="number" name="bedrooms" id="bedrooms" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="bathrooms" class="form-label">Number of Bathrooms</label>
            <input type="number" name="bathrooms" id="bathrooms" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-control" required>
                <option value="House">House</option>
                <option value="Apartment">Apartment</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Property Photo</label>
            <input type="file" name="photo" id="photo" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Property</button>
    </form>
</div>
@endsection