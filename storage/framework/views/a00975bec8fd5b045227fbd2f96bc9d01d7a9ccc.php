

<?php $__env->startSection('content'); ?>
    <div class="Login">
        <form class="Login__Form">
            <div class="Login__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' class="Login__Form__Datos__Box" />
            </div>
            <div class="Login__Form__Datos">
                <p>Contraseña:</p>
                <input type='text' class="Login__Form__Datos__Box" />
            </div>
            <div class="Login__Form__Check">
                <input type='checkbox' class='Login__Form__Check__CheckBox' />
                <p>Recordar Contraseña</p>
            </div>
            <div class="Login__Form__Enlace">
                <p>¿No tienes cuenta? <a href="/checkin" class="Login__Form__Enlace__Registro">Registrate aquí</a></p>
            </div>
            <div class="Login__Form__Boton">
                <button class="Login__Form__Boton__Enviar">Iniciar Sesión</button>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/login.blade.php ENDPATH**/ ?>