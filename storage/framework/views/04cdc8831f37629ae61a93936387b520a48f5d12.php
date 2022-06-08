

<?php $__env->startSection('content'); ?>
    <div class="View">
        <div class="View__BoxImg">
            <img src="<?php echo e(asset ($libro[0]->foto)); ?>" />
        </div>
        <div class="View__BoxDescription">
            <p class="View__BoxDescription__Titulo" ><?php echo e($libro[0]->titulo); ?></p>
            <div class="View__BoxDescription__Autor">
                <a href="/search/<?php echo e($libro[0]->autor->id); ?>"><?php echo e($libro[0]->autor->nombre); ?></a>
            </div>
            <div class="View__BoxDescription__Categoria">
                <a href="/search/<?php echo e($libro[0]->categoria->tipo); ?>"><?php echo e($libro[0]->categoria->tipo); ?></a>
            </div>
            <p class="View__BoxDescription__Sinopsis"><?php echo e($libro[0]->sinopsis); ?></p>
        </div>

        <div class="View__ShopBox">
            <p class="View__ShopBox__Titulo">Precio:</p>
            <p class="View__ShopBox__Precio"><?php echo e($libro[0]->precio); ?></p>
            <form action="<?php echo e(route('cart.add')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($libro[0]->id); ?>">
                <input type="hidden" name="titulo" value="<?php echo e($libro[0]->titulo); ?>">
                <input type="hidden" name="autor" value="<?php echo e($libro[0]->autor->nombre); ?>">
                <input type="hidden" name="foto" value="<?php echo e($libro[0]->foto); ?>">
                <input type="hidden" name="precio" value="<?php echo e($libro[0]->precio); ?>">
                <input type="hidden" name="quantity" value="1">
                <input type="submit" name="boton"  class="View__ShopBox__Boton" value="Añadir a la cesta">
            </form>
        </div>
    </div>

    <div class="Valuations">
        <form action="<?php echo e(route('valoracion.store')); ?>" method="POST" class="Valuations__Formulario"> 
            <?php echo csrf_field(); ?>
            <label class="Valuations__Formulario__Label">Titulo de la valoración:</label>
            <input type="text" name="titulo" placeholder="Titulo" class="Valuations__Formulario__Input"/>
                <?php $__errorArgs = ['titulo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            <label class="Valuations__Formulario__Label">Puntuación</label>
            <select class="Valuations__Formulario__Select">
                <option value="1">1 estrella</option>
                <option value="2">2 estrellas</option>
                <option value="3">3 estrellas</option>
                <option value="4">4 estrellas</option>
                <option value="5">5 estrellas</option>
            </select>

            <label class="Valuations__Formulario__Label">Reseña:</label>
            <textarea name="comentario" class="Valuations__Formulario__Textarea" cols="20" placeholder="Introduce tu reseña:"></textarea>
                <?php $__errorArgs = ['comentario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <input type="hidden" name="libro_id" value="<?php echo e($libro[0]->id); ?>">
            <input type="submit" value="Enviar" class="Valuations__Formulario__Button"/>
        </form>

        <!--Bucle valoraciones de este libro
        -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/view.blade.php ENDPATH**/ ?>