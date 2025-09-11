@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-12 bg-[#fff8e1] rounded-lg shadow-xl font-serif text-[#4a3b1f]">

    {{-- Message de succès --}}
    @if(session('success'))
    <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-8 text-center font-semibold">
        {{ session('success') }}
    </div>
    @endif

    <!-- Slider style Wattpad -->
    <div class="relative overflow-hidden rounded-xl shadow-lg mb-12 h-72 bg-[#ffb347]">
        <img src="{{ asset('img/rashed-paykary-0qsndF2tcgM-unsplash.jpg') }}" alt="Image 1" class="absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000" id="slide1">
        <img src="{{ asset('img/mikolaj-dR52tmClhpk-unsplash.jpg') }}" alt="Image 2" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000" id="slide2">
        <img src="{{ asset('img/janko-ferlic-sfL_QOnmy00-unsplash.jpg') }}" alt="Image 3" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000" id="slide3">
    </div>

    <!-- Présentation -->
    <div class="text-center mb-16">
        <h1 class="text-5xl font-extrabold mb-3 tracking-wide text-[#d2691e]" style="font-family: 'Georgia', serif;">Bienvenue sur <span class="underline decoration-wavy decoration-[#ffb347]">MonBlog</span> !</h1>
        <p class="text-lg max-w-xl mx-auto leading-relaxed font-medium italic text-[#5a3b00]">
            Découvrez, lisez et écrivez vos livres préférés. Rejoignez notre communauté chaleureuse de passionnés de science et de littérature.
        </p>

        <!-- Bouton Commencer -->
        <a href="{{ route('discover') }}"
            class="mt-8 inline-block bg-gradient-to-r from-[#ffb347] via-[#ffcc33] to-[#d2691e] text-black font-bold px-12 py-4 rounded-full shadow-lg hover:brightness-110 transition duration-300 tracking-wide border border-[#e6a23c]"
            style="font-family: 'Georgia', serif; text-shadow: 0 1px 1px rgba(255,255,255,0.4);">
            📖 Commencer la lecture
        </a>
    </div>

    <!-- Section Écrire -->
    <div onclick="window.location.href='{{ url('/devenir-ecrivain') }}'"
        class="bg-[#fff2cc] rounded-xl p-8 shadow-md hover:shadow-xl cursor-pointer transition duration-300 text-center">
        <i class="fas fa-pencil-alt text-6xl mb-5 text-[#d2691e]"></i>
        <h3 class="text-2xl font-semibold mb-2">✍️ Écrivez Vos Propres</h3>
        <p class="leading-relaxed text-[#5a3b00] font-medium">
            Partagez vos récits et exprimez votre créativité au sein d’une communauté bienveillante d’écrivains et lecteurs.
        </p>
    </div>

    <!-- Call to Action -->
    <div class="mt-20 text-center max-w-2xl mx-auto">
        <h2 class="text-3xl font-extrabold mb-4 tracking-wide text-[#c1440e]">Prêt à rejoindre l’aventure ?</h2>
        <p class="text-lg leading-relaxed mb-6 text-[#5a3b00] font-medium">
            Inscrivez-vous et commencez à écrire ou lire vos histoires préférées dès aujourd’hui.
        </p>

        <!-- Bouton Inscription -->
        <a href="{{ route('register') }}"
            class="inline-flex items-center justify-center bg-gradient-to-r from-[#ffb347] via-[#ffcc33] to-[#d2691e] text-black font-semibold px-12 py-4 rounded-full shadow-lg hover:brightness-110 transition duration-300 tracking-wide border border-[#e6a23c]"
            style="text-shadow: 0 1px 1px rgba(255,255,255,0.5);">
            <i class="fas fa-user-plus mr-3"></i> S’inscrire
        </a>
    </div>
</div>

<!-- SLIDER JS -->
<script>
    const slides = ['slide1', 'slide2', 'slide3'];
    let current = 0;

    setInterval(() => {
        document.getElementById(slides[current]).classList.remove('opacity-100');
        document.getElementById(slides[current]).classList.add('opacity-0');

        current = (current + 1) % slides.length;

        document.getElementById(slides[current]).classList.remove('opacity-0');
        document.getElementById(slides[current]).classList.add('opacity-100');
    }, 4000);
</script>

<!-- STYLES -->
<style>
    body {
        background-color: #fff8e1;
        font-family: 'Georgia', serif;
    }

    h1, h2, h3 {
        text-shadow: 0 1px 1px rgba(102, 51, 0, 0.2);
    }

    p {
        color: #5a3b00;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        filter: brightness(1.1);
    }

    /* Boutons cliquables */
    .btn-wattpad {
        background: linear-gradient(to right, #ffb347, #ffcc33, #d2691e);
        color: black;
        padding: 1rem 2.5rem;
        font-weight: bold;
        border-radius: 9999px;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, background 0.2s ease;
    }

    .btn-wattpad:hover {
        transform: scale(1.05);
    }
</style>
@endsection
