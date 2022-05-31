<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--Header-->
    <div className="Header">
        <div className="Header__FirstBox">
            <img src={logo} alt="logo" id="logo" className="Header__FirstBox__logo" />
            <div className="Header__FirstBox__Search">
              <input type="text" className="Search__Box" name='Search__Box' placeholder="¿Qué buscas?"/>
              <i class="fa-regular fa-magnifying-glass"></i>            
            </div>
            <div className="Header__FirstBox__ShopCart">
                <a><i class="fa-light fa-cart-shopping"></i></a>           
            </div>
        </div>
        <div className="Header__NavBar">
          <ul className="Header__NavBar__ul">
            <li>
              <a href='/Buscador'>Libros</a>
            </li>
            <li>
              <a href='/Autores'>Autores</a>
            </li>
            <li>
              <a href='/Contacto'>Contacto</a>
            </li>
          </ul>

          <button className="Header__NavBar__BotonInicio">
            <a href='/Login' className="Header__NavBar__BotonInicio__Enlace">Inicio Sesión</a>
          </button>
        </div>
    </div>

    <!--Contenido-->
    @yield('content')
    <!--Footer-->
    <div className="Footer">
        <div className="Footer__Box">
            <img src={logo} alt='Logo' id='Logo' className='Footer__Box__Logo'/>
            <div className='Footer__Box__Contact'>
                <p>¿Tienes alguna duda?</p>
                <a href='/'>Contactanos</a>
            </div>
            <div className='Footer__Box__RRSS'>
                <p>Siguenos en nuestras redes sociales:</p>
                <div className='RRSS__BoxIcon'>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-goodreads-g"></i>
                </div>
            </div>
        </div>
        <div className="Footer__Copyright">
            <p>Copyright 2022</p>
        </div>
    </div>
</body>
</html>