@extends('layout.base')

@section('content')
    <div>
        <div class="Login">
            <form class="Login__Form" method="POST" action="{{route ('login')}}">
                @csrf
                <div class="Login__Form__Datos">
                    <label for="email" class="Login__Form__Datos__Label">{{ __('Email') }}</label>
                    <input type="email" class="Login__Form__Datos__Box @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="Login__Form__Datos">
                    <label for="password" class="Login__Form__Datos__Label">{{ __('Contraseña') }}</label>
    
                    <input id="password" type="password" class="Login__Form__Datos__Box @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="Login__Form__Enlace">
                    <p>¿No tienes cuenta? <a href="/register" class="Login__Form__Enlace__Registro">Registrate aquí</a></p>
                </div>
                <div class="Login__Form__Boton">
                    <input type='submit' value="Iniciar Sesión" class="Login__Form__Boton__Enviar"/>
                </div>
            </form>
        </div>
    </div>
@endsection