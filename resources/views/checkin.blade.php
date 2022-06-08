@extends('layout/base')

@section('content')
    <div class="Check">
        <form class="Check__Form" method="POST" action="{{ route('checkin.store') }}">
            @csrf
            <div class="Check__Form__Datos">
                <p>Nombre:</p>
                <input type='text' class="Check__Form__Datos__Box" name="nombre" value="{{ old('nombre') }}"/>
                @error('nombre')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="Check__Form__Datos">
                <p>Apellido:</p>
                <input type='text' class="Check__Form__Datos__Box" name="apellido" value="{{ old('apellido') }}"/>
                @error('apellido')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="Check__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' class="Check__Form__Datos__Box" name="nombreUsuario" value="{{ old('nombreUsuario') }}"/>
                @error('nombreUsuario')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="Check__Form__Datos">
                <p>Email:</p>
                <input type='text' class="Check__Form__Datos__Box" name="email" value="{{ old('email') }}"/>
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="Check__Form__Datos">
                <p>Contraseña:</p>
                <input type='password' class="Check__Form__Datos__Box" name="password" value="{{ old('password') }}"/>
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="Check__Form__Datos">
                <p>Repetir contraseña:</p>
                <input type='password' class="Check__Form__Datos__Box" name="password_confirmation" value="{{ old('password_confirmation') }}"/>
                @error('password_confirmation')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="Check__Form__Boton">
                <input type="submit" value="Registrate" class="Check__Form__Boton__Enviar" />
            </div>
        </form>
    </div>

@endsection