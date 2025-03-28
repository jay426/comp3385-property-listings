<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    // Show form to create a new property
    public function create()
    {
        return view('properties.create');
    }

    // Store new property
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'type' => 'required|in:House,Apartment',
            'description' => 'required|string',
            'photo' => 'required|image|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');

        Property::create([
            'title' => $validated['title'],
            'bedrooms' => $validated['bedrooms'],
            'bathrooms' => $validated['bathrooms'],
            'location' => $validated['location'],
            'price' => $validated['price'],
            'type' => $validated['type'],
            'description' => $validated['description'],
            'photo' => $photoPath,
        ]);

        return redirect('/properties')->with('success', 'Property added successfully!');
    }

    // List all properties
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }

    // Show an individual property
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('properties.show', compact('property'));
    }
}