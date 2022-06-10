@extends('layout/base')

@section('content')
    <div class="Slider">
        <div class="Slider__Box">
            @for ($i=1; $i <= 5; $i++)
                <div class="Slider__Box__Item">
                    <img src="/Img/Slider/Slider{{$i}}.png"/> <!--llamar a la imagen del slider-->
                </div>
            @endfor
        </div>
    </div>
    <div class="Novedades">
        <div class="Novedades__BoxTitulo">
            <p>--Últimas Novedades--</p>
        </div>
        <div class="Novedades__BoxLibros">
            @for ($i=0; $i<4; $i++) <!--Bucle limitado a 4 porque solo quiero mostrar los 4 ultimos libros incluidos en mi base de datos-->
                <div class="Novedades__BoxLibros__Libro">
                    <div class="Novedades__BoxLibros__Libro__Img">
                        <a href="/view/{{$libro[$i]->id}}"><img src="{{$libro[$i]->foto}}" /></a> <!--Desde el controlador mando una lista de libros con atributos especificos 
                                                                                                    que voy a mostrar.-->
                    </div>  
                    <a class="Novedades__BoxLibros__Libro__Titulo" href="/view/{{$libro[$i]->id}}">{{$libro[$i]->titulo}}</a>
                    <a class="Novedades__BoxLibros__Libro__Autor" href="/search/{{$libro[$i]->autor->id}}">{{$libro[$i]->autor->nombre}}</a>
                    <div class="Novedades__BoxLibros__Libro__BoxCategoria">
                        <a href="/search/{{$libro[$i]->categoria->tipo}}">{{$libro[$i]->categoria->tipo}}</a>
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
            @for ($i=0; $i<3; $i++)  <!--Bucle limitado a 3 porque solo quiero mostrar los 3 primeros autores incluidos en mi base de datos-->
                <div class="Autores__Box__Autor">
                    <div class="Autores__Box__Autor__Img">
                        <a href="/search/{{$libro[$i]->autor->id}}"><img src="{{$libro[$i]->autor->foto}}" /></a>
                    </div>
                    <a class="Autores__Box__Autor__Nombre" href="/search/{{$libro[$i]->autor->id}}">{{$libro[$i]->autor->nombre}}</a>
                </div>
            @endfor
        </div>
    </div>
    <script src="js/home.js"></script>
@endsection