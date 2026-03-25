@extends('layouts.app')
@section('content')
    <div class="max-w-4xl mx-auto px-6 py-12">
        <h3 class="text-2xl font-bold mb-6">Modulo de usuarios</h3>
        <a href="{{ route('post.create') }}">Nuevo usuario</a>

        <table class="w-full text-left text-sm">
            <thead>
                <tr style="border-bottom: 1px solid var(--portfolio-border);">
                    <th class="py-3 px-4">ID</th>
                    <th class="py-3 px-4">Nombre</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Creado</th>
                </tr>
            </thead>
            <tbody>
                @if ($users->count() > 0)
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No hay usuarios registrados.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
