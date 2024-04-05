<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        return view('frontend.index',[
            'post' => Post::where('status',1)->latest()->paginate(10),
        ]);
    }
}
