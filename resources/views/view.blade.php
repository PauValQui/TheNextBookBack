@extends('layout/base')

@section('content')
    <div class="View">
        <div class="View__BoxImg">
            <img src="{{asset ($libro[0]->foto)}}" />
        </div>
        <div class="View__BoxDescription">
            <p class="View__BoxDescription__Titulo" >{{$libro[0]->titulo}}</p>
            <div class="View__BoxDescription__Autor">
                <a href="/search/{{$libro[0]->autor->id}}">{{$libro[0]->autor->nombre}}</a>
            </div>
            <div class="View__BoxDescription__Categoria">
                <a href="/search/{{$libro[0]->categoria->tipo}}">{{$libro[0]->categoria->tipo}}</a>
            </div>
            <p class="View__BoxDescription__Sinopsis">{{$libro[0]->sinopsis}}</p>
        </div>

        <div class="View__ShopBox">
            <p class="View__ShopBox__Titulo">Precio:</p>
            <p class="View__ShopBox__Precio">{{$libro[0]->precio}}</p>
            <button class="View__ShopBox__Boton">Añadir a la cesta</button>
            <button class="View__ShopBox__Boton">Añadir a la lista de deseos</button>
        </div>
    </div>

    <div class="Valuations">
        <form action="POST" class="Valuations__Formulario">
            <label class="Valuations__Formulario__Label">Nombre de Usuario: </label>
            <input type="text" placeholder="Nombre de usuario" class="Valuations__Formulario__Input" />
            <label class="Valuations__Formulario__Label">Titulo de la valoración:</label>
            <input type="text" placeholder="Titulo" class="Valuations__Formulario__Input"/>
            <label class="Valuations__Formulario__Label">Puntuación</label>
            <select class="Valuations__Formulario__Select">
                <option value="1 estrella">1</option>
                <option value="2 estrellas">2</option>
                <option value="3 estrellas">3</option>
                <option value="4 estrellas">4</option>
                <option value="5 estrellas">5</option>
            </select> 
            <label class="Valuations__Formulario__Label">Reseña:</label>
            <textarea class="Valuations__Formulario__Textarea" cols="20" placeholder="Introduce tu reseña:"></textarea>
            <input type="button" value="Enviar" class="Valuations__Formulario__Button"/>
        </form>

        <!--Bucle valoraciones de este libro
        -->
    </div>
@endsection