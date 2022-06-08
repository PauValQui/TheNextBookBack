

<?php $__env->startSection('content'); ?>
    <div class="Check">
        <form class="Check__Form" method="POST" action="<?php echo e(route('checkin.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="Check__Form__Datos">
                <p>Nombre:</p>
                <input type='text' class="Check__Form__Datos__Box" name="nombre" value="<?php echo e(old('nombre')); ?>"/>
                <?php $__errorArgs = ['nombre'];
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
            <div class="Check__Form__Datos">
                <p>Apellido:</p>
                <input type='text' class="Check__Form__Datos__Box" name="apellido" value="<?php echo e(old('apellido')); ?>"/>
                <?php $__errorArgs = ['apellido'];
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
            <div class="Check__Form__Datos">
                <p>Nombre de Usuario:</p>
                <input type='text' class="Check__Form__Datos__Box" name="nombreUsuario" value="<?php echo e(old('nombreUsuario')); ?>"/>
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
            <div class="Check__Form__Datos">
                <p>Email:</p>
                <input type='text' class="Check__Form__Datos__Box" name="email" value="<?php echo e(old('email')); ?>"/>
                <?php $__errorArgs = ['email'];
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
            <div class="Check__Form__Datos">
                <p>Contraseña:</p>
                <input type='password' class="Check__Form__Datos__Box" name="password" value="<?php echo e(old('password')); ?>"/>
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
            <div class="Check__Form__Datos">
                <p>Repetir contraseña:</p>
                <input type='password' class="Check__Form__Datos__Box" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>"/>
                <?php $__errorArgs = ['password_confirmation'];
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
            
            <div class="Check__Form__Boton">
                <input type="submit" value="Registrate" class="Check__Form__Boton__Enviar" />
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/checkin.blade.php ENDPATH**/ ?>