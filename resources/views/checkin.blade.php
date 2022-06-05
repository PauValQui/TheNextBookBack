@extends('layout/base')

@section('content')
    <div class="Check">
        <form class="Check__Form">
            <div class="Check__Form__Datos">
                <p>Nombre:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            <div class="Check__Form__Datos">
                <p>Apellido:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            <div class="Check__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            <div class="Check__Form__Datos">
                <p>Email:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            <div class="Check__Form__Datos">
                <p>Contraseña:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            <div class="Check__Form__Datos">
                <p>Repetir contraseña:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            
            <div class="Check__Form__Boton">
                <button class="Check__Form__Boton__Foto">Añadir foto de perfil</button>
            </div>
            
            <div class="Check__Form__Boton">
                <button class="Check__Form__Boton__Enviar">Registrate</button>
            </div>
        </form>
    </div>

@endsection