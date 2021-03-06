<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/header.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/footer.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/home.css')); ?>" rel="stylesheet">
</head>
<body>

    <!--Header-->
    <div class="Header">
        <div class="Header__FirstBox">
            <a href="/" class="Header__FirstBox__Enlace"><img src='../../Img/Logo.jpeg' alt="logo" id="logo" class="Header__FirstBox__Enlace__Logo" /></a>
            <div class="Header__FirstBox__Search">
              <input type="text" class="Search__Box" name='Search__Box' placeholder="¿Qué buscas?"/>
              <i class="fa-regular fa-magnifying-glass"></i>            
            </div>
            <div class="Header__FirstBox__ShopCart">
                <a class="ShopCart__Link"><i class="fa-light fa-cart-shopping"></i></a>           
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
            <a href='/Login' class="Header__NavBar__BotonInicio__Enlace">Inicio Sesión</a>
          </button>
        </div>
    </div>

    <!--Contenido-->
    <div class="container">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!--Footer-->
    <div class="Footer">
        <div class="Footer__Box">
            <img src='../../Img/Logo.jpeg' alt='Logo' id='Logo' class='Footer__Box__Logo'/>
            <div class='Footer__Box__Contact'>
                <p>¿Tienes alguna duda?</p>
                <a href='/'>Contactanos</a>
            </div>
            <div class='Footer__Box__RRSS'>
                <p>Siguenos en nuestras redes sociales:</p>
                <div class='RRSS__BoxIcon'>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-goodreads-g"></i>
                </div>
            </div>
        </div>
        <div class="Footer__Copyright">
            <p>Copyright 2022</p>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\TheNextBookBack\resources\views/layout/base.blade.php ENDPATH**/ ?>