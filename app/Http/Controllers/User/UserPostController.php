<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'foo',
            'content' => 'bar',
        ];

        $posts = array_fill(0, 10, $post);

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
        $data = $request->all();

        dd($data);

        return "Запрос на создание поста";
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
        $data = $request->all();

        dd($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
