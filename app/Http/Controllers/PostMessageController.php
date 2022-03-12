<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostMessageController extends Controller
{
    public function show(Request $request, User $user)
    {
        if (auth()->check() && auth()->id() === $user->id) {
            return redirect('/');
        }

        return view('post', ['user' => $user]);
    }

    public function store(Request $request, User $user)
    {
        $request->validate(['message' => 'required|string']);
        
        $user->messages()->create(['message' => $request->message]);

        return back()->with('success', 'Message sent! Now it\'s your turn to create your own link.');
    }
}
