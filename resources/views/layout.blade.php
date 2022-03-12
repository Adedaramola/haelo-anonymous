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
                <a href="/" class="text-4xl text-indigo-900 font-bold tracking-tight">&#xe41e;haelo</a>
                @guest
                    <button type="button" class="focus:outline-none text-indigo-900 underline font-semibold text-lg underline-offset-2">Log In</button>
                @endguest

                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="focus:outline-none text-indigo-900 underline font-semibold text-lg underline-offset-2">Logout</button>
                    </form>
                @endauth
            </div>
        </header>
        @yield('body')
        <footer class="flex-shrink-0 text-center px-4 py-6">
            <p class="text-gray-600 text-sm">Developed by <a href="#" class="underline">Adedaramola Adetimehin</a></p>
        </footer>
    </div>
</body>

</html>
