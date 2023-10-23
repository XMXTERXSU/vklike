<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __invoke(string $user_id)
    {
        $user = User::where('id', $user_id)->first();

        if(!$user){
            abort(404);
        }
        $posts = Post::where('user_id', $user_id)->paginate(12);

        if($user_id == Auth::id()){
            return view('user.profile.index', compact(['posts', 'user']));
        } else {
            return view('profile.profile', compact(['posts', 'user']));
        }

    }
}
