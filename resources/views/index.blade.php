@extends('layout')

@section('body')
@guest
<div class="max-w-xl text-center">
    <h1 class="text-indigo-900 text-4xl sm:text-5xl font-semibold">See what your friends think about you</h1>
    <p class="text-gray-700 sm:text-lg">The only anonymous messaging service you'd ever need</p>
</div>

<div class="w-full max-w-xl mt-8 sm:bg-white p-2 rounded-full sm:border sm:border-gray-100">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="flex flex-col sm:flex-row">
            <input type="text" name="username"
                class="flex-1 px-4 sm:px-6 focus:ring-0 focus:border-none focus:outline-none"
                placeholder="Enter a username" autocomplete="off" required autofocus>
            <button type="submit"
                class="flex-shrink-0 mt-3 sm:mt-0 px-6 py-3 bg-indigo-900 text-yellow-200 rounded-3xl">
                create link
            </button>
        </div>
    </form>
</div>
@error('username')
<small class="text-red-500">{{ $message }}</small>
@enderror
@endguest

@auth
<x-copy-to-clipboard />
@if ($messages->count())
<div class="w-full max-w-5xl grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
    @foreach ($messages as $message)
    <div class="flex flex-col justify-between px-4 py-4 bg-indigo-900 text-white rounded">
        <p>{{ $message->message }}</p>
        <small class="mt-2 text-yellow-300">{{ $message->created_at }}</small>
    </div>
    @endforeach
</div>
@else
<p>There are no messages to display here.</p>
@endif
@endauth
@endsection
