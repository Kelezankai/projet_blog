<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - MonBlog</title>

    <!-- Tailwind CSS -->

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9fafb;
        }

        .orange-button {
            background-color: #ff5722;
            color: white;
            transition: background-color 0.3s;
        }

        .orange-button:hover {
            background-color: #e64a19;
        }

        header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #f1f5f9;
        }

        /* Effet zoom sur le logo */
        .logo:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease-in-out;
        }

        /* Animation fade-in pour les éléments du menu */
        nav a {
            transition: transform 0.3s ease-in-out, color 0.3s;
        }

        nav a:hover {
            transform: scale(1.05);
            color: #FF5722;
        }

        /* Animation du menu mobile */
        #mobile-menu {
            transition: transform 0.3s ease;
            transform: translateX(-100%);
        }

        #mobile-menu.open {
            transform: translateX(0);
        }

        /* Animation du footer */
        footer {
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
            animation-delay: 1s;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="fixed w-full z-20 bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('img/pancakes.png') }}" alt="Logo" class="h-12 w-12 rounded-full shadow-md mr-3 logo">
                <span class="text-2xl font-extrabold text-orange-500">MonBlog</span>
            </div>

            <!-- Navigation Menu -->
            <nav class="space-x-6 text-gray-600 font-semibold hidden md:flex">
                <a href="{{ route('Accueil') }}" class="hover:text-blue-500 transition-transform duration-300 ease-in-out transform hover:scale-105">Accueil</a>
                <a href="{{ route('discover') }}" class="hover:text-green-500 transition-transform duration-300 ease-in-out transform hover:scale-105">Découvrir</a>
                <a href="{{ route('login') }}" class="hover:text-red-500 transition-transform duration-300 ease-in-out transform hover:scale-105">Connexion</a>

                <a href="{{ route('register') }}" class="hover:text-yellow-500 transition-transform duration-300 ease-in-out transform hover:scale-105">Inscription</a>
            </nav>

            <!-- Mobile Menu Toggle -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-orange-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Dropdown Menu (Hidden) -->
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg">
            <nav class="flex flex-col items-center space-y-4 py-4">
                <a href="#accueil" class="text-gray-600 hover:text-orange-500 transition duration-300 ease-in-out">Accueil</a>
                <a href="{{ route('decouvrir') }}" class="hover:text-purple-500 transition-transform duration-300 ease-in-out transform hover:scale-105">Découvrir</a>
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-orange-500 transition duration-300 ease-in-out">Connexion</a>
                <a href="#inscription" class="text-gray-600 hover:text-orange-500 transition duration-300 ease-in-out">Inscription</a>
            </nav>
        </div>
    </header>

    <!-- Mobile Menu Toggle Script -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
        });
    </script>

    <!-- Main -->
    <main class="pt-28 min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center p-6 mt-12 text-gray-600 text-sm shadow-inner">
        &copy; 2025 MonBlog. Inspiré de Wattpad. Tous droits réservés.
    </footer>

</body>

</html>