@extends('layout')

@section('body')
<div class="w-full max-w-sm px-6 py-5 bg-white border border-gray-100 rounded">
    <h3 class="text-lg mb-3 font-bold text-indigo-900">Log In</h3>
    <form action="" method="post">
        @csrf
        <input type="email" name="email" class="block w-full px-4 py-2 border border-gray-300 rounded focus:ring-0 focus:outline-none" placeholder="Email address">
        <button type="submit"
            class="block w-full mt-4 px-5 py-3 text-yellow-200 font-medium bg-indigo-900 rounded-3xl">Log in</button>
    </form>
</div>
@endsection
