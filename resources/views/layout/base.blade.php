<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/search.css')}}" rel="stylesheet">
    <link href="{{asset('css/view.css')}}" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    <link href="{{asset('css/checkin.css')}}" rel="stylesheet">
    <link href="{{asset('css/contact.css')}}" rel="stylesheet">
    <link href="{{asset('css/shopcart.css')}}" rel="stylesheet">
</head>
<body>

    <!--Header-->
    <div class="Header">
        <div class="Header__FirstBox">
            <a href="/" class="Header__FirstBox__Enlace"><img src='../../Img/Logo.jpeg' alt="logo" id="logo" class="Header__FirstBox__Enlace__Logo" /></a>
            <form action="{{route('header.buscador')}}" method="post" class="Header__FirstBox__Search">
              @csrf
              <div class="Header__FirstBox__Search__Box">
                <input type="text" class="Search__Texto" name='texto' placeholder="¿Qué buscas?"/>
                <button class="Search__Button"><img src="{{asset ('Img/IconosSVG/search.svg')}}" /></button>         
              </div>
            </form>
            <div class="Header__FirstBox__ShopCart">
                <a class="ShopCart__Link" href="/shopcart"><img src="{{asset ('Img/IconosSVG/shopCart.png')}}" alt=""></a>           
            </div>
        </div>
        <div class="Header__NavBar">
          <ul class="Header__NavBar__ul">
            <li>
              <a href='/search/libros'>Libros</a>
            </li>
            <li>
              <a href='/search/autores'>Autores</a>
            </li>
            <li>
              <a href='/contact'>Contacto</a>
            </li>
          </ul>

          <button class="Header__NavBar__BotonInicio">
            <a href='/login' class="Header__NavBar__BotonInicio__Enlace">Inicio Sesión</a>
          </button>
        </div>
    </div>

    <!--Contenido-->
      @yield('content')
      
    <!--Footer-->
    <div class="Footer">
        <div class="Footer__Box">
            <img src='../../Img/Logo.jpeg' alt='Logo' id='Logo' class='Footer__Box__Logo'/>
            <div class='Footer__Box__Contact'>
                <p>¿Tienes alguna duda?</p>
                <a href='/contact'>Contactanos</a>
            </div>
        </div>
        <div class="Footer__Copyright">
            <p>Copyright 2022</p>
        </div>
    </div>
    <script src="js/search.js"></script>
</body>
</html>