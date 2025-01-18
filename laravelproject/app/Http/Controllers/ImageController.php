<?php
namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    // Show the image upload form
    public function create()
    {
        return view('images.create');
    }

    // Handle the image upload
    public function store(Request $request)
    {
        // Validate the image input
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:5000',
        ]);

        // Store the image in the 'public' disk (storage/app/public)
        $path = $request->file('image')->store('images', 'public');

        // Insert image data into the database
        $image = new Image();
        $image->image_name = $request->file('image')->getClientOriginalName();
        $image->image_path = $path;
        $image->save();

        // Return back with a success message
        return back()->with('success', 'Image uploaded successfully!');
    }

    // Display all images
    public function index()
    {
        $images = Image::all(); // Fetch all images
        return view('images.index', compact('images'));
    }
}
