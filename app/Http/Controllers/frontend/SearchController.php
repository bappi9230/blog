<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class SearchController extends Controller
{
    public function Search(Request $request){
        $query = $request->input('data');
        $post = Post::where('title', 'like', '%' . $query . '%')
        ->orWhere('content', 'like', '%' . $query . '%')
        ->paginate(10);
        return response()->json(View::make('frontend.search', compact('post'))->render());
    }
}
