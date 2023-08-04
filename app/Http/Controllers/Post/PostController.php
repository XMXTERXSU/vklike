<?php

namespace App\Http\Controllers\Post;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:50'],
            'from_date' => ['nullable', 'string', 'date'],
            'to_date' => ['nullable', 'string', 'date', 'after:from_date'],
            'tag' => ['nullable', 'string'],
        ]);

        $query = Post::query()
            ->where('published', true)
            ->whereNotNull('published_at');

        if ($search = $validated['search'] ?? null) {
            $query->where('title', 'like', "%{$search}%");
        }
        if ($fromDate = $validated['from_date'] ?? null) {
            $query->where('published_at ', '>=', new Carbon ($fromDate));
        }
        if ($toDate = $validated['to_date'] ?? null) {
            $query->where('published_at ', '>=', new Carbon ($toDate));
        }
        if ($tag = $validated['tag'] ?? null) {
            $query->whereJsonContains('tags', $tag);
        }

        $posts = $query->latest('published_at')->paginate(12);

        return view('post.index', compact('posts'));
    }


    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

}
