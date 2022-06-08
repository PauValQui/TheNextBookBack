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
        <form action="{{ route('valoracion.store') }}" method="POST" class="Valuations__Formulario"> 
            @csrf
            <label class="Valuations__Formulario__Label">Titulo de la valoración:</label>
            <input type="text" name="titulo" placeholder="Titulo" class="Valuations__Formulario__Input"/>
            @error('titulo')
                    <p class="error-message">{{ $message }}</p>
            @enderror
            
            <label class="Valuations__Formulario__Label">Puntuación</label>
            <select class="Valuations__Formulario__Select">
                <option value="1">1 estrella</option>
                <option value="2">2 estrellas</option>
                <option value="3">3 estrellas</option>
                <option value="4">4 estrellas</option>
                <option value="5">5 estrellas</option>
            </select>

            <label class="Valuations__Formulario__Label">Reseña:</label>
            <textarea name="comentario" class="Valuations__Formulario__Textarea" cols="20" placeholder="Introduce tu reseña:"></textarea>
            @error('comentario')
                    <p class="error-message">{{ $message }}</p>
            @enderror
            <input type="hidden" name="libro_id" value="{{$libro[0]->id}}">
            <input type="submit" value="Enviar" class="Valuations__Formulario__Button"/>
        </form>

        <!--Bucle valoraciones de este libro
        -->
    </div>
@endsection