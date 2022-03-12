@extends('layout')

@section('body')
    <div class="flex-1 flex flex-col items-center justify-center px-4 py-8">
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
                    @error('email')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </form>
            </div>
        @endguest

        @auth
            @if ($messages->count())

            @else
                <p>There are no messages to display here.</p>
            @endif
        @endauth
    </div>
@endsection
