<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fast Laravel Pizza</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white dark:bg-gray-200">
        <header class="bg-yellow-400 py-4 shadow-md">
            <div class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto flex justify-between items-center">
                <div class="text-white font-bold text-xl">Fast Laravel Pizza</div>
                @if (Route::has('login'))
                    <nav class="flex items-center gap-4">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="inline-block px-4 py-2 bg-white text-yellow-600 rounded-md font-medium hover:bg-yellow-50 transition"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-block px-4 py-2 text-white hover:text-yellow-100 font-medium"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-block px-4 py-2 bg-white text-yellow-600 rounded-md font-medium hover:bg-yellow-50 transition">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </header>

        <main class="px-4 sm:px-6 lg:px-8 max-w-3xl mx-auto">
            <div class="my-10 text-center sm:my-16">
                <h1 class="mb-8 text-xl font-semibold text-stone-700 dark:text-stone-200 md:text-3xl">
                    <span class="text-stone-500">The best pizza.</span><br />
                    <span class="text-yellow-500">Straight out of the oven, straight to you.</span>
                </h1>

                @auth
                    <div class="mb-4 text-sm text-stone-600 dark:text-stone-400 md:text-base">
                        👋 Welcome back, {{ Auth::user()->name }}!
                    </div>
                    <a href="{{ url('/dashboard') }}" class="inline-block bg-yellow-500 text-white font-semibold px-6 py-3 rounded-md hover:bg-yellow-600 transition">
                        Go to Dashboard
                    </a>
                @else
                    <p class="mb-4 text-sm text-stone-600 dark:text-stone-400 md:text-base">
                        👋 Welcome! Please log in or register to start ordering:
                    </p>
                    
                    <div class="flex gap-4 justify-center">
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block bg-yellow-300 text-stone-900 border border-yellow-500 font-semibold px-6 py-3 rounded-2xl hover:bg-yellow-50 transition">
                                Start Ordering
                            </a>
                        @endif
                    </div>
                @endauth
            </div>
        </main>

        @if (Route::has('login'))
            <div class="h-14 hidden lg:block"></div>
        @endif
    </body>
</html>