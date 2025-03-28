<!-- resources/views/properties/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $property->title }}</h1>
    <img src="{{ asset('storage/' . $property->photo) }}" alt="{{ $property->title }}" class="img-fluid mb-4">
    <p><strong>Location:</strong> {{ $property->location }}</p>
    <p><strong>Price:</strong> ${{ number_format($property->price, 2) }}</p>
    <p><strong>Bedrooms:</strong> {{ $property->bedrooms }}</p>
    <p><strong>Bathrooms:</strong> {{ $property->bathrooms }}</p>
    <p><strong>Type:</strong> {{ $property->type }}</p>
    <p><strong>Description:</strong> {{ $property->description }}</p>
    <a href="mailto:realtor@example.com" class="btn btn-primary">Email Realtor</a>
</div>
@endsection