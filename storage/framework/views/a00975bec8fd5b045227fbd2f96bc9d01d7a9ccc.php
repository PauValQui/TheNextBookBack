

<?php $__env->startSection('content'); ?>
    <div class="Login">
        <form class="Login__Form" method="POST" action="<?php echo e(route ('login.login')); ?>">
            <div class="Login__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' name="nombreUsuario" class="Login__Form__Datos__Box" />
                    <?php $__errorArgs = ['nombreUsuario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="error-message"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="Login__Form__Datos">
                <p>Contraseña:</p>
                <input type='password' name="password" class="Login__Form__Datos__Box" />
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div class="Login__Form__Enlace">
                <p>¿No tienes cuenta? <a href="/checkin" class="Login__Form__Enlace__Registro">Registrate aquí</a></p>
            </div>
            <div class="Login__Form__Boton">
                <input type='submit' value="Iniciar Sesión" class="Login__Form__Boton__Enviar"/>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/login.blade.php ENDPATH**/ ?>