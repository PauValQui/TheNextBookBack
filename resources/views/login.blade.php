@extends('layout/base')

@section('content')
    <div class="Login">
        <form class="Login__Form" method="POST">
            <div class="Login__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' name="nombreUsuario" class="Login__Form__Datos__Box" />
                @error('nombreUsuario')
                    <p class="error-message">{{ $message }}</p>
            @enderror
            </div>
            <div class="Login__Form__Datos">
                <p>Contraseña:</p>
                <input type='text' name="password" class="Login__Form__Datos__Box" />
            </div>
            @error('password')
                    <p class="error-message">{{ $message }}</p>
            @enderror
            <div class="Login__Form__Enlace">
                <p>¿No tienes cuenta? <a href="/checkin" class="Login__Form__Enlace__Registro">Registrate aquí</a></p>
            </div>
            <div class="Login__Form__Boton">
                <input type='submit' value="Iniciar Sesión" class="Login__Form__Boton__Enviar"/>
            </div>
        </form>
    </div>

@endsection