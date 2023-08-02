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

        /** @var Post $post */
        $posts = Post::get(['id', 'title', 'published_at']);

        $validated = $request->validate([
            'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
            'page' => ['nullable', 'integer', 'min:1', 'max:100'],
        ]);

        $page = $validated['page'] ?? 1;
        $limit = $validated['limit'] ?? 12;
        $offset = $limit * ($page - 1);

        $posts = Post::paginate($limit);

        $posts = Post::latest('published_at')->paginate(12);

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
