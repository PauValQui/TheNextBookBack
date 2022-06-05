

<?php $__env->startSection('content'); ?>
    <div class="Check">
        <form class="Check__Form">
            <div class="Check__Form__Datos">
                <p>Nombre:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            <div class="Check__Form__Datos">
                <p>Apellido:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            <div class="Check__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            <div class="Check__Form__Datos">
                <p>Contraseña:</p>
                <input type='text' class="Check__Form__Datos__Box" />
            </div>
            <div class="Check__Form__Datos">
                <p>Repetir contraseña:</p>
                <input type='text' class="Check__Form__Datos__Box" />
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