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
        @foreach($libro as $libros){
            <div class="Novedades__BoxLibro">
                <div class="Novedades__BoxLibro__Img">
                    <img src="{{$libros}}" />
                </div>
            </div>
        }
    </div>
    <div class="Autores">

    </div>
    <script src="js/home.js"></script>
@endsection