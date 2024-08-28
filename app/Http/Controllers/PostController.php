<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Mengambil semua data posts dengan pagination
        $posts = Post::orderBy('created_at', 'desc')->paginate(10); // Sesuaikan jumlah data per halaman

        // Mengirim data posts ke view
        return view('dashboard.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.createPost');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->is_published);
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:posts',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date',
            'is_published' => 'nullable',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }
        $validatedData['image'] = $imagePath;
        $validatedData['is_published'] = $request->is_published ? true : false;
        // dd($validatedData['title']);
        // Create the post
        Post::create($validatedData);

        // Redirect back with success message
        return redirect('/dashboard/posts')->with('success', 'Post created successfully.');
    }
}