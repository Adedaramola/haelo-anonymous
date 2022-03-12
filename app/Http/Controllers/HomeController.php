<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $messages = Message::all();

        return view('index', ['messages' => $messages]);
    }
}
