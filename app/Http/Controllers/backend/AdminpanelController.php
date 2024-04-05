<?php

namespace App\Http\Controllers\backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminpanelController extends Controller
{
    public function dashboard(){
        return view('backend.blog.index',['blog' => Post::where('user_id', auth()->id())->latest()->get()]);
    }
}
