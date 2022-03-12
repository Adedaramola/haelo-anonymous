<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Faker\Generator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function store(Request $request)
    {
        $request->validate(['username' => 'required|string|unique:users']);

        $user = User::create([
            'username' => mb_strtolower($request->username),
        ]);

        Auth::login($user, true);

        return redirect()->back();
    }
}
