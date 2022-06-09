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
            <form action="{{ route('cart.add') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$libro[0]->id}}">
                <input type="hidden" name="name" value="{{$libro[0]->titulo}}">
                <input type="hidden" name="price" value="{{$libro[0]->precio}}">
                <input type="hidden" name="titulo" value="{{$libro[0]->titulo}}">
                <input type="hidden" name="precio" value="{{$libro[0]->precio}}">
                <input type="hidden" name="autor" value="{{$libro[0]->autor->nombre}}">
                <input type="hidden" name="foto" value="{{$libro[0]->foto}}">
                <input type="hidden" name="quantity" value="1">
                <input type="submit" name="boton"  class="View__ShopBox__Boton" value="Añadir a la cesta">
            </form>
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

        <!--Bucle valoraciones de este libro-->

        @if($longitud != 0){
            <div class="ViewValuations">
                @for ($j=0; $j < $longitud; $j++){
                    <div class="Buscador__BoxLibros">
                        @if ($libro[$j]->autor->nombre == $libro[$i]->autor->nombre)
                            <div class="Buscador__BoxLibros__Libro">
                                <div class="Buscador__BoxLibros__Libro__Img">
                                    <a href="/view/{{$libro[$j]->id}}"><img src="{{ asset ($libro[$j]->foto) }}" /></a>
                                </div>
                                <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/{{$libro[$j]->id}}">{{$libro[$j]->titulo}}</a>
                                <a class="Buscador__BoxLibros__Libro__Autor" href="/search/{{$libro[$j]->autor->id}}">{{$libro[$j]->autor->nombre}}</a>
                                <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                    <a href="/search/{{$libro[$j]->categoria->tipo}}">{{$libro[$j]->categoria->tipo}}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                }
                @endfor
            </div>
        }
        @endif
    </div>
@endsection