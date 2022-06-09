@extends('layout/base')

@section('content')
    <div class="Check">
        <form class="Check__Form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="Check__Form__Datos">
                <label for="name" class="Check__Form__Datos__Label">Nombre:</label>
                <input id="nombre" type="text" class="Check__Form__Datos__Box" name="nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('nombre')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="Check__Form__Datos">
                <label for="email" class="Check__Form__Datos__Label">Email</label>
                <input id="email" type="email" class="Check__Form__Datos__Box" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <div class="Check__Form__Datos">
                <label for="password" class="Check__Form__Datos__Label">Contraseña:</label>
                <input type='password' class="Check__Form__Datos__Box" name="password" value="{{ old('password') }}"/>
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="Check__Form__Datos">
                <label for="password-confirm" class="Check__Form__Datos__Label">Confirmar Contraseña</label>
                <input id="password-confirm" type="password" class="Check__Form__Datos__Box" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="Check__Form__Boton">
                <button type="submit" class="Check__Form__Boton__Enviar">Registrate</button>
            </div>
        </form>
    </div>

@endsection