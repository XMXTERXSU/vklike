<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::paginate(12);

        return view('user.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {


        return view('user.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
            'published_at' => ['nullable', 'string', 'date'],
            'published' => ['nullable', 'boolean'],
        ]);

        $post = Post::create([
            'user_id' => User::query()->value('id'),
            'title' => $validated['title'],
            'content' => $validated['content'],
            'publsihed_at' => new Carbon($validated['publsihed_at'] ?? null),
            'publsihed' => $validated['publsihed'] ?? false,
        ]);

        alert(__('Успешно создан'), 'success');

        return redirect()->route('user.posts.show', 123);
    }

    /**
     * Display the specified resource.
     */
    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'foo',
            'content' => 'bar',
        ];

        return view('user.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'foo',
            'content' => 'bar',
        ];

        return view('user.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $title = $request->input('title');
        // $content = $request->input('content');

        // dd($data);

        alert(__('Сохранено'), 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect() - route('user.posts.index');
    }
}
