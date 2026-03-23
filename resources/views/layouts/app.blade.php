<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Esteban Avila — Portfolio')</title>
    <meta name="description" content="@yield('description', 'Portfolio de Esteban Avila — Desarrollador Web')">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Extra head content --}}
    @stack('head')
</head>

<body class="font-outfit antialiased">

    {{-- ========== NAVBAR ========== --}}
    <nav class="fixed top-0 left-0 w-full z-50 border-b transition-all duration-300"
        style="background: rgba(10, 15, 26, 0.8); backdrop-filter: blur(16px); border-color: var(--portfolio-border);">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="text-xl font-bold tracking-tight"
                style="color: var(--portfolio-text);">
                <span style="color: var(--portfolio-accent);">E</span>steban
                <span style="color: var(--portfolio-accent);">.</span>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#inicio" class="text-sm font-medium hover:opacity-100 opacity-60 transition-opacity">Inicio</a>
                <a href="#sobre-mi" class="text-sm font-medium hover:opacity-100 opacity-60 transition-opacity">Sobre
                    mí</a>
                <a href="#proyectos"
                    class="text-sm font-medium hover:opacity-100 opacity-60 transition-opacity">Proyectos</a>
                <a href="#habilidades"
                    class="text-sm font-medium hover:opacity-100 opacity-60 transition-opacity">Habilidades</a>
                <a href="#contacto" class="text-sm font-semibold px-5 py-2 rounded-full transition-all duration-300"
                    style="background: var(--portfolio-accent); color: white;"
                    onmouseover="this.style.background='var(--portfolio-accent-hover)'"
                    onmouseout="this.style.background='var(--portfolio-accent)'">
                    Contacto
                </a>
            </div>

            {{-- Mobile Toggle --}}
            <button id="menu-toggle" class="md:hidden flex flex-col gap-1.5 p-2 cursor-pointer" aria-label="Abrir menú">
                <span class="block w-6 h-0.5 rounded-full transition-all duration-300"
                    style="background: var(--portfolio-text);"></span>
                <span class="block w-6 h-0.5 rounded-full transition-all duration-300"
                    style="background: var(--portfolio-text);"></span>
                <span class="block w-4 h-0.5 rounded-full transition-all duration-300"
                    style="background: var(--portfolio-text);"></span>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="md:hidden overflow-hidden transition-all duration-300"
            style="max-height: 0; border-color: var(--portfolio-border);">
            <div class="px-6 py-4 flex flex-col gap-4" style="background: var(--portfolio-bg);">
                <a href="#inicio" class="text-sm font-medium" style="color: var(--portfolio-text-muted);">Inicio</a>
                <a href="#sobre-mi" class="text-sm font-medium" style="color: var(--portfolio-text-muted);">Sobre mí</a>
                <a href="#proyectos" class="text-sm font-medium"
                    style="color: var(--portfolio-text-muted);">Proyectos</a>
                <a href="#habilidades" class="text-sm font-medium"
                    style="color: var(--portfolio-text-muted);">Habilidades</a>
                <a href="#contacto" class="text-sm font-semibold" style="color: var(--portfolio-accent);">Contacto</a>
            </div>
        </div>
    </nav>

    {{-- ========== MAIN CONTENT ========== --}}
    <main class="pt-16">
        @yield('content')
    </main>

    {{-- ========== FOOTER ========== --}}
    <footer class="border-t" style="border-color: var(--portfolio-border); background: var(--portfolio-bg);">
        <div class="max-w-6xl mx-auto px-6 py-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">

                {{-- Brand --}}
                <div class="text-center md:text-left">
                    <a href="{{ url('/') }}" class="text-lg font-bold" style="color: var(--portfolio-text);">
                        <span style="color: var(--portfolio-accent);">E</span>steban<span
                            style="color: var(--portfolio-accent);">.</span>
                    </a>
                    <p class="text-sm mt-1" style="color: var(--portfolio-text-muted);">
                        Construyendo experiencias digitales.
                    </p>
                </div>

                {{-- Social Links --}}
                <div class="flex items-center gap-5">
                    <a href="#" target="_blank" aria-label="GitHub"
                        class="opacity-50 hover:opacity-100 transition-opacity">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" aria-label="LinkedIn"
                        class="opacity-50 hover:opacity-100 transition-opacity">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    <a href="mailto:tu@email.com" aria-label="Email"
                        class="opacity-50 hover:opacity-100 transition-opacity">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Bottom --}}
            <div class="mt-8 pt-6 border-t text-center" style="border-color: var(--portfolio-border);">
                <p class="text-xs" style="color: var(--portfolio-text-muted);">
                    &copy; {{ date('Y') }} Esteban Avila. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>

    {{-- ========== SCRIPTS ========== --}}
    <script>
        // Mobile menu toggle
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        let open = false;

        toggle.addEventListener('click', () => {
            open = !open;
            menu.style.maxHeight = open ? menu.scrollHeight + 'px' : '0';
        });

        // Close mobile menu on link click
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                open = false;
                menu.style.maxHeight = '0';
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.style.background = 'rgba(10, 15, 26, 0.95)';
            } else {
                nav.style.background = 'rgba(10, 15, 26, 0.8)';
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
