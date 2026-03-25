@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="POST" class="flex flex-col gap-2 m-auto p-4 bg-mauve-600 max-w-4xl">
            @csrf

            <div class="mb-4">
                <label>Nombre</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @error('name')
                    <span style="color: var(--color-accent-rose);">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span style="color: var(--color-accent-rose);">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label>Contraseña</label>
                <input type="password" name="password">
                @error('password')
                    <span style="color: var(--color-accent-rose);">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label>Confirmar contraseña</label>
                <input type="password" name="password_confirmation">
            </div>

            <button type="submit">Crear usuario</button>
        </form>
    </div>
@endsection
