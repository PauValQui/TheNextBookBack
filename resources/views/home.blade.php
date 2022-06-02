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

        @for ($i=0; $i<4; $i++)
            <div class="Novedades__BoxLibro">
                <div class="Novedades__BoxLibro__Img">
                    <img src="{{$libro[$i]->foto}}" />
                </div>
                <a class="Novedades__BoxLibro__Titulo">{{$libro[$i]->titulo}}</a>
                <a class="Novedades__BoxLibro__Autor">{{$libro[$i]->autor}}</a>
                <div class="Novedades__BoxLibro__BoxCategoria">
                    <a>{{$libro[$i]->categoria}}</a>
                </div>
            </div>
        @endfor
    </div>
    <div class="Autores">
        @for ($i=0; $i<3; $i++)
            <div class="Autores__Box">
                <div class="Autores__Box__Img">
                    <img src="{{$libro[$i]->foto}}" />
                </div>
                <a class="Autores__Box__Autor">{{$libro[$i]->autor}}</a>
            </div>
        @endfor
    </div>
    <script src="js/home.js"></script>
@endsection