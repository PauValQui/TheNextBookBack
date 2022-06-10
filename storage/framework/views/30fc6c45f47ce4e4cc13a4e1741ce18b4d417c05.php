

<?php $__env->startSection('content'); ?>
    <div class="ShopCart__Texto">
        <p>Cesta</p>
    </div>
    <div class="ShopCart">
        <div class="ShopCart__Box"><!-- En la cesta cada vex que añadimos un libro se añade a los items de cart por lo que se va mostrando con el bucle -->
            <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <div class="ShopCart__Box__Item">
                    <div class="ShopCart__Box__Item__Foto">
                        <img src="<?php echo e(asset ($item->attributes->foto)); ?>" />
                    </div>

                    <div class="ShopCart__Box__Item__Info">
                        <p class="Titulo"><?php echo e($item->attributes->titulo); ?></p>
                        <p class="Autor"><?php echo e($item->attributes->autor); ?></p>

                        <select name="cantidad" class="Cantidad">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>

                        <p class="Precio"><?php echo e($item->attributes->precio); ?></p>
                        <div class="Eliminar">
                            <form action="<?php echo e(route('cart.remove')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($item->id); ?>" name="id">
                                <button class="Eliminar__Boton">x</button>
                                <!--El boton eliminar borra el libro introducido-->
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="ShopCart__Total">
            <div class="ShopCart__Total__Texto">
                <p>Total: <?php echo e(Cart::getTotal()); ?> €</p> <!-- Llamo al metodo getTotal que va calculando el precio que le envio a cada item de cart -->
            </div>
            <div class="ShopCart__Total__Limpiar">
                <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="ShopCart__Total__Limpiar__Boton">Limpiar Cesta</button>
                    <!-- El boton de Limpiar borra toda la cesta -->
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/shopcart.blade.php ENDPATH**/ ?>