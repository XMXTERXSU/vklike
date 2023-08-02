<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = [
            null => __('Все категории'),
            1 => __('Первая категория'),
            2 => __('Вторая категория'),
        ];

        $posts = Post::latest('published_at')->paginate(12);

        return view('post.index', compact('posts', 'categories'));
    }


    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

}
