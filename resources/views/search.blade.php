@extends('layout/base')

@section('content')
    <div class="Buscador">
        @for($i=0; $i < $longitud; $i++)
            @if($info == $libro[$i]->titulo)
                <div class="Buscador__BoxLibros">
                    <div class="Buscador__BoxLibros__Libro">
                        <div class="Buscador__BoxLibros__Libro__Img">
                            <a href="/view/{{$libro[$i]->id}}"><img src="{{ asset ($libro[$i]->foto) }} " /></a>
                        </div>
                        <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/{{$libro[$i]->titulo}}">{{$libro[$i]->titulo}}</a>
                        <a class="Buscador__BoxLibros__Libro__Autor" href="/search/{{$libro[$i]->autor->id}}">{{$libro[$i]->autor->nombre}}</a>
                        <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                            <a href="/search/{{$libro[$i]->categoria->tipo}}">{{$libro[$i]->categoria->tipo}}</a>
                        </div>
                    </div>
                </div>
            
            @elseif($info == $libro[$i]->autor->nombre)
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
            
            @elseif($info == 'libros')
                    @for ($i=0; $i<$longitud; $i++)
                        <div class="Buscador__BoxLibros__Libro">
                            <div class="Buscador__BoxLibros__Libro__Img">
                                <a href="/view/{{$libro[$i]->id}}"><img src="{{ asset ($libro[$i]->foto) }}" /></a>
                            </div>
                            <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/{{$libro[$i]->id}}">{{$libro[$i]->titulo}}</a>
                            <a class="Buscador__BoxLibros__Libro__Autor" href="/search/{{$libro[$i]->autor->id}}">{{$libro[$i]->autor->nombre}}</a>
                            <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                <a href="/search/{{$libro[$i]->categoria->tipo}}">{{$libro[$i]->categoria->tipo}}</a>
                            </div>
                        </div>
                    @endfor
            
            @elseif($info == 'autores')
                <div class="Buscador__BoxAutores">
                    @for ($i=0; $i<7; $i++)
                        <div class="Buscador__BoxAutores__Autor">
                            <div class="Buscador__BoxAutores__Autor__Img">
                                <a href="/search/{{$libro[$i]->autor->id}}"><img src="{{ asset ($libro[$i]->autor->foto) }}" /></a>
                            </div>
                            <a class="Buscador__BoxAutores__Autor__Nombre" href="/search/{{$libro[$i]->autor->id}}">{{$libro[$i]->autor->nombre}}</a>
                        </div>
                    @endfor
                </div>
            @endif
        @endfor

        @switch($info)
                @case(1)
                @case(2)
                @case(3)
                @case(4)
                @case(5)
                @case(6)
                @case(7)
                    @for ($j=0; $j < $longitud; $j++)
                            @if ($libro[$j]->autor->id == $info)
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
                    @endfor
                @break
                @case('Romantica')
                @case('Fantasia')
                @case('Juvenil')
                @case('Historica')
                    @for ($j=0; $j < $longitud; $j++)
                            @if ($libro[$j]->categoria->tipo == $info)
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
                    @endfor
                @break
        @endswitch
    </div>
@endsection