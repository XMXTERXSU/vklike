<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke(string $user_id)
    {
        $user = User::where('id', $user_id)->first();

        if(!$user){
            abort(404);
        }
        $posts = Post::where('user_id', $user_id)->paginate(12);

        return view('profile.profile', compact(['posts', 'user']));
    }
}
