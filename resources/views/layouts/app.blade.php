<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Blog Écrivain') }}</title>

    {{-- Google Fonts + Tailwind --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/a2d9d5e64e.js" crossorigin="anonymous"></script>

    {{-- Tailwind config --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f97316', // orange Wattpad
                        secondary: '#fef9f5',
                        dark: '#1e293b',
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-secondary font-sans min-h-screen flex flex-col text-dark">

    {{-- Header / Navbar --}}
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            {{-- LOGO avec image --}}
            <a href="#" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-full shadow-sm">
                <span class="text-primary text-2xl font-bold">Écrivains</span>
            </a>

            {{-- Navigation --}}
            <nav class="space-x-6 text-gray-700 font-medium">
                <a href="#" class="hover:text-primary transition">Accueil</a>
                <a href="#" class="hover:text-primary transition">Explorer</a>
                <a href="#" class="hover:text-primary transition">Catégories</a>
                <a href="#" class="hover:text-primary transition">Connexion</a>
            </nav>
        </div>
    </header>

    {{-- Contenu dynamique --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white text-center py-6 text-sm text-gray-500 shadow-inner">
        &copy; {{ date('Y') }} Blog Écrivain. Tous droits réservés.
    </footer>

</body>
</html>
