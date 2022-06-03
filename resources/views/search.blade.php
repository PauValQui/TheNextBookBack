@extends('layout/base')

@section('content')

    <div class="OpcionCategoria">
        <form>
            <input type="checkbox" value="{{$libro[$i]->categoria->tipo}}"
        </form>
    </div>
    <div class="Buscador">
        @for($i=0; $i <= $longitud; $i++)
            @if($info == str_replace(" ", "%20" ,$libro[$i]->titulo)){
                <div class="Buscador__BoxLibros">
                    <div class="Buscador__BoxLibros__Libro">
                        <div class="Buscador__BoxLibros__Libro__Img">
                            <a href="/view/{{$libro[$i]->titulo}}"><img src="{{$libro[$i]->foto}}" /></a>
                        </div>
                        <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/{{$libro[$i]->titulo}}">{{$libro[$i]->titulo}}</a>
                        <a class="Buscador__BoxLibros__Libro__Autor" href="/search/{{$libro[$i]->autor->nombre}}">{{$libro[$i]->autor->nombre}}</a>
                        <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                            <a href="/search/{{$libro[$i]->categoria->tipo}}">{{$libro[$i]->categoria->tipo}}</a>
                        </div>
                    </div>
                </div>
            }
            @elseif($info == str_replace(" ", "%20" ,$libro[$i]->autor->nombre)){
                @for ($j=0; $j <= $longitud; $j++){
                    <div class="Buscador__BoxLibros">
                        @if ($libro[$j]->autor->nombre == $libro[$i]->autor->nombre)
                            <div class="Buscador__BoxLibros__Libro">
                                <div class="Buscador__BoxLibros__Libro__Img">
                                    <a href="/view/{{$libro[$j]->titulo}}"><img src="{{$libro[$j]->foto}}" /></a>
                                </div>
                                <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/{{$libro[$j]->titulo}}">{{$libro[$j]->titulo}}</a>
                                <a class="Buscador__BoxLibros__Libro__Autor" href="/search/{{$libro[$j]->autor->nombre}}">{{$libro[$j]->autor->nombre}}</a>
                                <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                    <a href="/search/{{$libro[$j]->categoria->tipo}}">{{$libro[$j]->categoria->tipo}}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                }
                @endfor
            }
            @elseif($info == 'libros')
                <div class="Buscador__BoxLibros">
                    @for ($i=0; $i<$longitud; $i++)
                        <div class="Buscador__BoxLibros__Libro">
                            <div class="Buscador__BoxLibros__Libro__Img">
                                <a href="/view/{{$libro[$i]->titulo}}"><img src="{{$libro[$i]->foto}}" /></a>
                            </div>
                            <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/{{$libro[$i]->titulo}}">{{$libro[$i]->titulo}}</a>
                            <a class="Buscador__BoxLibros__Libro__Autor" href="/search/{{$libro[$i]->autor->nombre}}">{{$libro[$i]->autor->nombre}}</a>
                            <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                <a href="/search/{{$libro[$i]->categoria->tipo}}">{{$libro[$i]->categoria->tipo}}</a>
                            </div>
                        </div>
                    @endfor
                </div>
            
            @elseif($info == 'autores')
                <div class="Autores__Box">
                    @for ($i=0; $i<7; $i++)
                        <div class="Autores__Box__Autor">
                            <div class="Autores__Box__Autor__Img">
                                <a href="/search/{{$libro[$i]->autor->nombre}}"><img src="{{$libro[$i]->autor->foto}}" /></a>
                            </div>
                            <a class="Autores__Box__Autor__Nombre" href="/search/{{$libro[$i]->autor->nombre}}">{{$libro[$i]->autor->nombre}}</a>
                        </div>
                    @endfor
                </div>
            
            @endif
        @endfor
    </div>
@endsection