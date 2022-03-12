<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="See what others think about you" />

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased text-gray-900 bg-yellow-50">
    <div class="flex flex-col min-h-screen">
        <header class="flex items-center justify-center h-16">
            <div class="flex justify-between items-center w-full max-w-6xl px-4">
                <a href="/" class="text-4xl text-indigo-900 font-bold tracking-tight">haelo</a>
                @guest
                <div class="inline-flex items-center space-x-6">
                    <a href="/login"
                    class="focus:outline-none text-indigo-900 underline font-semibold text-lg underline-offset-2">Log
                    In</a>
                    <a href="/"
                    class="focus:outline-none text-indigo-900 underline font-semibold text-lg underline-offset-2">Create an account</a>
                </div>
                @endguest

                @auth
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"
                        class="focus:outline-none text-indigo-900 underline font-semibold text-lg underline-offset-2">Logout</button>
                </form>
                @endauth
            </div>
        </header>
        <main class="flex-1 flex flex-col items-center justify-center px-4 py-8">
            @yield('body')
        </main>
        <footer class="flex-shrink-0 text-center px-4 py-6">
            <p class="text-gray-600 text-sm">Developed by <a href="#" class="underline">Adedaramola Adetimehin</a></p>
        </footer>
    </div>
</body>

</html>
