@extends('layout/base')

@section('content')
    <div class="Slider">
        <button class="Slider__Button__Left"><img src='../../Img/IconosSVG/iconmonstr-arrow-left.svg' alt=""></i></button>

        <div class="Slider__Box">
            @for ($i=1; $i <= 5; $i++)
                <img src="/Img/Slider/Slider{{$i}}.png"/>
            @endfor
        </div>

        <button class="Slider__Button__Right"><img src='../../Img/IconosSVG/iconmonstr-arrow-right.svg' alt=""></button>
    </div>
    <div class="Novedades">

    </div>
    <div class="Autores">

    </div>
@endsection