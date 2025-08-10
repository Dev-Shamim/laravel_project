<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'IBlog')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="bg-gray-100">
        <nav class="bg-white shadow-md">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <a href="/" class="text-2xl font-bold text-blue-600">IBlog</a>
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
                        <a href="/categories" class="text-gray-600 hover:text-blue-600">Categories</a>
                        <a href="/single-blog" class="text-gray-600 hover:text-blue-600">Blog</a>
                        <a href="/profile" class="text-gray-600 hover:text-blue-600">Profile</a>
                    </div>
                    <div class="hidden md:flex items-center space-x-4">
                        @guest
                            <a href="/login" class="text-gray-600 hover:text-blue-600">Login</a>
                            <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Register</a>
                        @endguest
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-gray-600 hover:text-blue-600">Logout</button>
                            </form>
                        @endauth
                    </div>
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="text-gray-600 hover:text-blue-600 focus:outline-none">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div id="mobile-menu" class="hidden md:hidden">
                <a href="/" class="block py-2 px-4 text-sm text-gray-600 hover:bg-gray-100">Home</a>
                <a href="/categories" class="block py-2 px-4 text-sm text-gray-600 hover:bg-gray-100">Categories</a>
                <a href="/single-blog" class="block py-2 px-4 text-sm text-gray-600 hover:bg-gray-100">Blog</a>
                <a href="/profile" class="block py-2 px-4 text-sm text-gray-600 hover:bg-gray-100">Profile</a>
                @guest
                    <a href="/login" class="block py-2 px-4 text-sm text-gray-600 hover:bg-gray-100">Login</a>
                    <a href="/register" class="block py-2 px-4 text-sm text-gray-600 hover:bg-gray-100">Register</a>
                @endguest
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left py-2 px-4 text-sm text-gray-600 hover:bg-gray-100">Logout</button>
                    </form>
                @endauth
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="bg-gray-800 text-white py-8">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">IBlog</h3>
                        <p class="text-gray-400">A blog about technology, programming, and digital innovation.</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Links</h3>
                        <ul class="space-y-2">
                            <li><a href="/" class="text-gray-400 hover:text-white">Home</a></li>
                            <li><a href="/categories" class="text-gray-400 hover:text-white">Categories</a></li>
                            <li><a href="/single-blog" class="text-gray-400 hover:text-white">Blog</a></li>
                            <li><a href="/profile" class="text-gray-400 hover:text-white">Profile</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Newsletter</h3>
                        <form class="flex">
                            <input type="email" placeholder="Your email" class="w-full px-4 py-2 rounded-l-md text-gray-800">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-r-md hover:bg-blue-700">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-8 pt-4 text-center text-gray-500">
                    <p>&copy; 2025 IBlog. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <script>
            document.getElementById('mobile-menu-button').addEventListener('click', function() {
                var mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                }
            });
        </script>
    </body>
</html>