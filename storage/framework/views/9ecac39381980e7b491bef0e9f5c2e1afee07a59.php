<?php $__env->startSection('content'); ?>
    <div class="Check">
        <form class="Check__Form" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="Check__Form__Datos">
                <label for="name" class="Check__Form__Datos__Label">Nombre:</label>
                <input id="nombre" type="text" class="Check__Form__Datos__Box" name="nombre" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
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
                <label for="email" class="Check__Form__Datos__Label">Email</label>
                <input id="email" type="email" class="Check__Form__Datos__Box" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
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
                <label for="password" class="Check__Form__Datos__Label">Contraseña:</label>
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
                <label for="password-confirm" class="Check__Form__Datos__Label">Confirmar Contraseña</label>
                <input id="password-confirm" type="password" class="Check__Form__Datos__Box" name="password_confirmation" required autocomplete="new-password">
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
                <button type="submit" class="Check__Form__Boton__Enviar">Registrate</button>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/auth/register.blade.php ENDPATH**/ ?>