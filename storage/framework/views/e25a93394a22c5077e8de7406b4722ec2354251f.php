

<?php $__env->startSection('content'); ?>
    <div class="Check">
        <form class="Check__Form" method="post" >
            <?php echo csrf_field(); ?>
            <div class="Check__Form__Datos">
                <p>Nombre:</p>
                <input type='text' class="Check__Form__Datos__Box" name="nombre"/>
            </div>
            <div class="Check__Form__Datos">
                <p>Apellido:</p>
                <input type='text' class="Check__Form__Datos__Box" name="apellido"/>
            </div>
            <div class="Check__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' class="Check__Form__Datos__Box" name="nombreUsuario"/>
            </div>
            <div class="Check__Form__Datos">
                <p>Email:</p>
                <input type='text' class="Check__Form__Datos__Box" name="email"/>
            </div>
            <div class="Check__Form__Datos">
                <p>Contraseña:</p>
                <input type='password' class="Check__Form__Datos__Box" name="password"/>
            </div>
            <div class="Check__Form__Datos">
                <p>Repetir contraseña:</p>
                <input type='password' class="Check__Form__Datos__Box" name="password_confirmation"/>
            </div>
            
            <div class="Check__Form__Boton">
                <button class="Check__Form__Boton__Foto">Añadir foto de perfil</button>
            </div>
            
            <div class="Check__Form__Boton">
                <button class="Check__Form__Boton__Enviar">Registrate</button>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/checkin.blade.php ENDPATH**/ ?>