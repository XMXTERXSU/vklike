<?php

namespace App\Http\Controllers\Post;

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
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        // dd($search, $category_id);

        $post = (object) [
            'id' => 123,
            'title' => 'foo',
            'content' => 'bar',
            'category_id' => 1,
        ];

        $posts = array_fill(0, 10, $post);

        $posts = array_filter($posts, function ($post) use ($search, $category_id) {
            if ($search && !str_contains(strtolower($post->title), strtolower($search))) {
                return false;
            }
            if ($category_id && $post->category_id != $category_id) {
                return false;
            }
            return true;
        });

        $categories = [
            null => __('Все категории'),
            1 => __('Первая категория'),
            2 => __('Вторая категория'),
        ];

        return view('post.index', compact('posts', 'categories'));
    }


    public function show(string $id)
    {
        $post = (object) [
            'id' => 1,
            'title' => 'foo',
            'content' => 'bar',
        ];
        return view('post.show', compact('post'));
    }

}
