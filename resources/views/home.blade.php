@extends('layouts.app')

@section('title', 'Esteban Avila — Portfolio')
@section('description', 'Desarrollador Web apasionado por crear experiencias digitales únicas.')

@section('content')

    {{-- ========== HERO ========== --}}
    <section id="inicio" class="min-h-screen flex items-center relative overflow-hidden">

        {{-- Background glow --}}
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full opacity-15 blur-3xl pointer-events-none"
            style="background: var(--portfolio-accent);"></div>

        <div class="max-w-6xl mx-auto px-6 py-20 relative z-10">
            <div class="max-w-2xl">

                <p class="text-sm font-semibold tracking-widest uppercase mb-4 animate-fade-in-up"
                    style="color: var(--portfolio-accent);">
                    Hola, soy
                </p>

                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight animate-fade-in-up delay-100"
                    style="color: var(--portfolio-text);">
                    Esteban
                    <span class="block" style="color: var(--portfolio-accent);">Avila.</span>
                </h1>

                <p class="text-lg md:text-xl mt-6 leading-relaxed animate-fade-in-up delay-200"
                    style="color: var(--portfolio-text-muted);">
                    Desarrollador web enfocado en crear aplicaciones modernas,
                    rápidas y con experiencias que importan.
                </p>

                <div class="flex flex-wrap gap-4 mt-10 animate-fade-in-up delay-300">
                    <a href="#proyectos"
                        class="px-8 py-3 rounded-full text-sm font-semibold transition-all duration-300 hover:scale-105"
                        style="background: var(--portfolio-accent); color: white;">
                        Ver proyectos
                    </a>
                    <a href="#contacto"
                        class="px-8 py-3 rounded-full text-sm font-semibold border transition-all duration-300 hover:scale-105"
                        style="border-color: var(--portfolio-border); color: var(--portfolio-text);">
                        Contactar
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== SOBRE MÍ ========== --}}
    <section id="sobre-mi" class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-12">
                Sobre <span style="color: var(--portfolio-accent);">mí</span>
            </h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-lg leading-relaxed" style="color: var(--portfolio-text-muted);">
                        Soy un desarrollador web apasionado por la tecnología y el diseño.
                        Me especializo en crear aplicaciones modernas utilizando herramientas
                        como Laravel, PostgreSQL y tecnologías frontend actuales.
                    </p>
                    <p class="text-lg leading-relaxed mt-4" style="color: var(--portfolio-text-muted);">
                        Cada proyecto es una oportunidad para aprender algo nuevo y superar
                        los límites de lo que puedo construir.
                    </p>
                </div>
                <div class="rounded-2xl p-8 border"
                    style="background: var(--portfolio-bg-card); border-color: var(--portfolio-border);">
                    <div class="grid grid-cols-2 gap-6 text-center">
                        <div>
                            <p class="text-3xl font-bold" style="color: var(--portfolio-accent);">+5</p>
                            <p class="text-sm mt-1" style="color: var(--portfolio-text-muted);">Proyectos</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold" style="color: var(--portfolio-accent);">2+</p>
                            <p class="text-sm mt-1" style="color: var(--portfolio-text-muted);">Años aprendiendo</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold" style="color: var(--portfolio-accent);">Laravel</p>
                            <p class="text-sm mt-1" style="color: var(--portfolio-text-muted);">Framework principal</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold" style="color: var(--portfolio-accent);">PostgreSQL</p>
                            <p class="text-sm mt-1" style="color: var(--portfolio-text-muted);">Base de datos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== PROYECTOS ========== --}}
    <section id="proyectos" class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-12">
                Mis <span style="color: var(--portfolio-accent);">proyectos</span>
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Proyecto Card (repite o haz un @foreach) --}}
                @for ($i = 1; $i <= 3; $i++)
                    <div class="group rounded-2xl border overflow-hidden transition-all duration-300 hover:-translate-y-1"
                        style="background: var(--portfolio-bg-card); border-color: var(--portfolio-border); box-shadow: var(--portfolio-shadow);">
                        <div class="h-48 flex items-center justify-center"
                            style="background: var(--portfolio-bg-card-alt);">
                            <span class="text-5xl font-bold opacity-20">0{{ $i }}</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-2">Proyecto {{ $i }}</h3>
                            <p class="text-sm leading-relaxed" style="color: var(--portfolio-text-muted);">
                                Descripción breve del proyecto. Tecnologías usadas y lo que hace especial a este trabajo.
                            </p>
                            <div class="flex gap-2 mt-4">
                                <span class="text-xs px-3 py-1 rounded-full"
                                    style="background: var(--portfolio-bg-card-alt); color: var(--portfolio-accent);">Laravel</span>
                                <span class="text-xs px-3 py-1 rounded-full"
                                    style="background: var(--portfolio-bg-card-alt); color: var(--portfolio-accent);">Tailwind</span>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </section>

    {{-- ========== HABILIDADES ========== --}}
    <section id="habilidades" class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-12">
                Habili<span style="color: var(--portfolio-accent);">dades</span>
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach (['PHP', 'Laravel', 'JavaScript', 'PostgreSQL', 'Tailwind CSS', 'HTML/CSS', 'Git', 'Vite'] as $skill)
                    <div class="rounded-xl border p-5 text-center transition-all duration-300 hover:-translate-y-1"
                        style="background: var(--portfolio-bg-card); border-color: var(--portfolio-border);">
                        <p class="text-sm font-semibold">{{ $skill }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ========== CONTACTO ========== --}}
    <section id="contacto" class="py-24">
        <div class="max-w-2xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                ¿Trabajamos <span style="color: var(--portfolio-accent);">juntos</span>?
            </h2>
            <p class="text-lg mb-10" style="color: var(--portfolio-text-muted);">
                Si tienes una idea, un proyecto o simplemente quieres saludar, no dudes en escribirme.
            </p>
            <a href="mailto:tu@email.com"
                class="inline-block px-10 py-4 rounded-full text-sm font-semibold transition-all duration-300 hover:scale-105"
                style="background: var(--portfolio-accent); color: white;">
                Envíame un email
            </a>
        </div>
    </section>

@endsection
