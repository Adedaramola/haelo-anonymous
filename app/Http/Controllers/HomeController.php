<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $messages = Message::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('index', ['messages' => $messages]);
    }
}
