@extends('layout')

@section('body')
@if (session('success'))
<div class="w-full max-w-sm mb-3 px-4 py-3 bg-green-50 text-green-600 rounded border border-green-600">
    {{ session('success') }}
</div>
@endif
<div class="w-full px-6 py-5 bg-white border border-gray-100 rounded">
    <h3 class="text-lg mb-3 font-bold text-indigo-900">Say something nice to {{ $user->username }}</h3>
    <form action="{{ route('user', $user) }}" method="post">
        @csrf
        <textarea x-data="{
                    resize() {
                        $el.style.height = '100px'
                        $el.style.height = ($el.scrollHeight + 20) + 'px'
                    }
                 }" x-init="resize" x-on:input="resize" name="message"
            class="block w-full focus:outline-none resize-none"
            placeholder="you're so awesome i forget to tell you everyday." required></textarea>
        <button type="submit"
            class="block w-full px-5 py-3 text-yellow-200 font-medium bg-indigo-900 rounded-3xl">Send</button>
    </form>
</div>
@endsection
