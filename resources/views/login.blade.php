@extends('layout/base')

@section('content')
    <div class="Login">
        <form class="Login__Form" method="POST">
            <div class="Login__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' name="nombreUsuario" class="Login__Form__Datos__Box" />
            </div>
            <div class="Login__Form__Datos">
                <p>Contraseña:</p>
                <input type='text' name="password" class="Login__Form__Datos__Box" />
            </div>
            <div class="Login__Form__Enlace">
                <p>¿No tienes cuenta? <a href="/checkin" class="Login__Form__Enlace__Registro">Registrate aquí</a></p>
            </div>
            <div class="Login__Form__Boton">
                <button class="Login__Form__Boton__Enviar">Iniciar Sesión</button>
            </div>
        </form>
    </div>

@endsection