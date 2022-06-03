@extends('layout/base')

@section('content')
    <div class="Slider">
        <button class="Slider__Button__Left"><img src='../../Img/IconosSVG/iconmonstr-arrow-left.svg' alt=""></i></button>

        <div class="Slider__Box">
            @for ($i=1; $i <= 5; $i++)
                <div class="Slider__Box__Item">
                    <img src="/Img/Slider/Slider{{$i}}.png"/>
                </div>
            @endfor
        </div>

        <button class="Slider__Button__Right"><img src='../../Img/IconosSVG/iconmonstr-arrow-right.svg' alt=""></button>
    </div>
    <div class="Novedades">
        <div class="Novedades__BoxTitulo">
            <p>--Últimas Novedades--</p>
        </div>
        <div class="Novedades__BoxLibros">
            @for ($i=0; $i<4; $i++)
            <div class="Novedades__BoxLibros__Libro">
                <div class="Novedades__BoxLibros__Libro__Img">
                    <img src="{{$libro[$i]->foto}}" />
                </div>
                <a class="Novedades__BoxLibros__Libro__Titulo">{{$libro[$i]->titulo}}</a>
                <a class="Novedades__BoxLibros__Libro__Autor">{{$libro[$i]->autor->nombre}}</a>
                <div class="Novedades__BoxLibros__Libro__BoxCategoria">
                    <a>{{$libro[$i]->categoria->tipo}}</a>
                </div>
            </div>
        @endfor
        </div>
        
    </div>
    <div class="Autores">
        <div class="Autores__Titulo">
            <p>--Autores--</p>
        </div>
        <div class="Autores__Box">
            @for ($i=0; $i<3; $i++)
                <div class="Autores__Box__Autor">
                    <div class="Autores__Box__Autor__Img">
                        <img src="{{$libro[$i]->autor->foto}}" />
                    </div>
                    <a class="Autores__Box__Autor__Nombre">{{$libro[$i]->autor->nombre}}</a>
                </div>
            @endfor
        </div>
    </div>
    <script src="js/home.js"></script>
@endsection