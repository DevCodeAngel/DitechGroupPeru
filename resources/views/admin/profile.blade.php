@extends('admin.index')

@section('title', 'Perfil de Usuario')

@section('content-main')
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
        color: #333;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 4px;
        color: #fff;
    }

    .alert-success {
        background-color: #28a745;
    }

    .alert-danger {
        background-color: #dc3545;
    }

    .profile__field {
        margin-bottom: 15px;
    }

    .profile__field label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        color: #333;
    }

    .profile__input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        box-sizing: border-box;
    }

    .profile__input:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
    }

    .button:hover {
        background-color: #0056b3;
    }

    .button__text {
        margin: 0;
    }
</style>

<div class="container">
    <h2>Editar Perfil</h2>
    
    <!-- Mostrar mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario de edición de perfil -->
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="profile__field">
            <label for="name">Nombre:</label>
            <input type="text" class="profile__input" name="name" value="{{ old('name', auth()->user()->name) }}" required>
        </div>
        
        <div class="profile__field">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="profile__input" name="email" value="{{ old('email', auth()->user()->email) }}" required>
        </div>

        <div class="profile__field">
            <label for="password">Nueva Contraseña:</label>
            <input type="password" class="profile__input" name="password" placeholder="Dejar en blanco si no deseas cambiarla">
        </div>

        <div class="profile__field">
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" class="profile__input" name="password_confirmation" placeholder="Confirmar nueva contraseña">
        </div>
        
        <button type="submit" class="button profile__submit">
            <span class="button__text">Actualizar Perfil</span>
        </button>
    </form>
</div>

@endsection
