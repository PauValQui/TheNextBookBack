@extends('layout/base')

@section('content')
    <div class="Buscador">
        @for ($i=0; $i<$longitud; $i++)
            {{--@if(count($libroBuscador) >=1)
                @for($i=0; $i <count($libroBuscador); $i++)
                    <div class="Buscador__BoxLibros">
                        <div class="Buscador__BoxLibros__Libro">
                            <div class="Buscador__BoxLibros__Libro__Img">
                                <a href="/view/{{$libro[$i]->id}}"><img src="{{ asset ($libroBuscador[$i]->foto) }} " /></a>
                            </div>
                            <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/{{$libroBuscador[$i]->titulo}}">{{$libroBuscador[$i]->titulo}}</a>
                            <a class="Buscador__BoxLibros__Libro__Autor" href="/search/{{$libroBuscador[$i]->autor->id}}">{{$libroBuscador[$i]->autor->nombre}}</a>
                            <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                <a href="/search/{{$libroBuscador[$i]->categoria->tipo}}">{{$libroBuscador[$i]->categoria->tipo}}</a>
                            </div>
                        </div>
                    </div>
                @endfor
            @endif;--}}
                    
            @if($info == $libro[$i]->autor->nombre)
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
                    @for ($i=0; $i<7; $i++)
                        <div class="Buscador__BoxAutores__Autor">
                            <div class="Buscador__BoxAutores__Autor__Img">
                                <a href="/search/{{$libro[$i]->autor->id}}"><img src="{{ asset ($libro[$i]->autor->foto) }}" /></a>
                            </div>
                            <a class="Buscador__BoxAutores__Autor__Nombre" href="/search/{{$libro[$i]->autor->id}}">{{$libro[$i]->autor->nombre}}</a>
                        </div>
                    @endfor
            @endif


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
        @endfor
    </div>
@endsection