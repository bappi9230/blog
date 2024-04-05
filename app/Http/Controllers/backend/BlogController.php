<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogReaquestValidation;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.blog.index', [
            'blog' => Post::where('user_id', auth()->id())->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(blogReaquestValidation $request)
    {
        Post::create($request->validated());
        return redirect()->route('blog.index')->with(['alert-type' => 'success', 'message' => 'Post Created Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.blog.show',['post'=>Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('backend.blog.edit',['post' => Post::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(blogReaquestValidation $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->fill($request->validated());
        if($post->isDirty()){
            $post->save();
            return redirect()->route('blog.index')->with(['alert-type' => 'success', 'message' => 'Post Updated Successfully']);
        } else {
            return redirect()->route('blog.index')->with(['alert-type' => 'info', 'message' => 'No changes made.']);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('blog.index')->with(['alert-type' => 'success', 'message' => 'Post Deleted Successfully']);
    }
}
