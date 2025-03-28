<!-- resources/views/properties/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Properties</h1>
    <a href="{{ route('properties.create') }}" class="btn btn-success mb-3">Add New Property</a>
    <div class="row">
        @foreach($properties as $property)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $property->photo) }}" class="card-img-top" alt="{{ $property->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $property->title }}</h5>
                        <p class="card-text">
                            Location: {{ $property->location }}<br>
                            Price: ${{ number_format($property->price, 2) }}
                        </p>
                        <a href="{{ route('properties.show', $property->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection