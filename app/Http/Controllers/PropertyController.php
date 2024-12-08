<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // Method to get all properties
    public function index()
    {
        $properties = Property::all(); // Fetch all properties
        return response()->json($properties);
    }

    // Method to get a single property by ID
    public function show($id)
    {
        try {
            // Find the property by ID
            $property = Property::findOrFail($id);

            // Return the property as a JSON response
            return response()->json($property);
        } catch (\Exception $e) {
            // Return a 404 error if the property is not found
            return response()->json(['error' => 'Property not found'], 404);
        }
    }

    // Method to create a new property
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        // Create a new property record in the database
        $property = Property::create($validatedData);

        // Return the newly created property as a JSON response
        return response()->json($property, 201);
    }

    // Method to update an existing property
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        // Find the property by ID
        $property = Property::findOrFail($id);

        // Update the property
        $property->update($validatedData);

        // Return the updated property
        return response()->json($property);
    }

    // Method to delete a property
    public function destroy($id)
    {
        // Find the property by ID and delete it
        $property = Property::findOrFail($id);
        $property->delete();

        // Return a success message
        return response()->json(['message' => 'Property deleted successfully']);
    }
}
