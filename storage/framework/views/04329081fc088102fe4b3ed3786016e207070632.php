

<?php $__env->startSection('content'); ?>
    <div class="Buscador">
            
            <?php if($info == 'libros'): ?><!-- si lo introducido en info es igual a libros recorro un bucle con la longitud de todos los libros y muestro las cartas diseñadas
                                    para mostrar los libros -->
                    <?php for($i=0; $i<$longitud; $i++): ?>
                        <div class="Buscador__BoxLibros__Libro">
                            <div class="Buscador__BoxLibros__Libro__Img">
                                <a href="/view/<?php echo e($libro[$i]->id); ?>"><img src="<?php echo e(asset ($libro[$i]->foto)); ?>" /></a>
                            </div>
                            <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/<?php echo e($libro[$i]->id); ?>"><?php echo e($libro[$i]->titulo); ?></a>
                            <a class="Buscador__BoxLibros__Libro__Autor" href="/search/<?php echo e($libro[$i]->autor->id); ?>"><?php echo e($libro[$i]->autor->nombre); ?></a>
                            <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                <a href="/search/<?php echo e($libro[$i]->categoria->tipo); ?>"><?php echo e($libro[$i]->categoria->tipo); ?></a>
                            </div>
                        </div>
                    <?php endfor; ?>
                
            <?php elseif($info == 'autores'): ?><!-- si lo introducido en info es igual a autores recorro un bucle y muestro las cartas diseñadas para mostrar los autores -->
                    <?php for($i=0; $i<7; $i++): ?>
                        <div class="Buscador__BoxAutores__Autor">
                            <div class="Buscador__BoxAutores__Autor__Img">
                                <a href="/search/<?php echo e($autores[$i]->id); ?>"><img src="<?php echo e(asset ($autores[$i]->foto)); ?>" /></a>
                            </div>
                            <a class="Buscador__BoxAutores__Autor__Nombre" href="/search/<?php echo e($autores[$i]->id); ?>"><?php echo e($autores[$i]->nombre); ?></a>
                        </div>
                    <?php endfor; ?>
            <?php endif; ?>
            
            <!-- he definido que cuando pulse en un autor mande a info un numero y desde ahi mostrar los libros de esos autores -->
            <?php switch($info):
                    case (1): ?>
                    <?php case (2): ?>
                    <?php case (3): ?>
                    <?php case (4): ?>
                    <?php case (5): ?>
                    <?php case (6): ?>
                    <?php case (7): ?>
                        <?php for($j=0; $j < $longitud; $j++): ?>
                                <?php if($libro[$j]->autor->id == $info): ?>
                                    <div class="Buscador__BoxLibros__Libro">
                                        <div class="Buscador__BoxLibros__Libro__Img">
                                            <a href="/view/<?php echo e($libro[$j]->id); ?>"><img src="<?php echo e(asset ($libro[$j]->foto)); ?>" /></a>
                                        </div>
                                        <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/<?php echo e($libro[$j]->id); ?>"><?php echo e($libro[$j]->titulo); ?></a>
                                        <a class="Buscador__BoxLibros__Libro__Autor" href="/search/<?php echo e($libro[$j]->autor->id); ?>"><?php echo e($libro[$j]->autor->nombre); ?></a>
                                        <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                            <a href="/search/<?php echo e($libro[$j]->categoria->tipo); ?>"><?php echo e($libro[$j]->categoria->tipo); ?></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                        <?php endfor; ?>
                    <?php break; ?>
                    <!-- y cuando pulse en una categoria mande a info el nombre de la categoria y desde ahi mostrar los libros de esas categorias -->
                    <?php case ('Romantica'): ?>
                    <?php case ('Fantasia'): ?>
                    <?php case ('Juvenil'): ?>
                    <?php case ('Historica'): ?>
                        <?php for($j=0; $j < $longitud; $j++): ?>
                                <?php if($libro[$j]->categoria->tipo == $info): ?>
                                    <div class="Buscador__BoxLibros__Libro">
                                        <div class="Buscador__BoxLibros__Libro__Img">
                                            <a href="/view/<?php echo e($libro[$j]->id); ?>"><img src="<?php echo e(asset ($libro[$j]->foto)); ?>" /></a>
                                        </div>
                                        <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/<?php echo e($libro[$j]->id); ?>"><?php echo e($libro[$j]->titulo); ?></a>
                                        <a class="Buscador__BoxLibros__Libro__Autor" href="/search/<?php echo e($libro[$j]->autor->id); ?>"><?php echo e($libro[$j]->autor->nombre); ?></a>
                                        <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                            <a href="/search/<?php echo e($libro[$j]->categoria->tipo); ?>"><?php echo e($libro[$j]->categoria->tipo); ?></a>
                                        </div>
                                    </div>
                                <?php endif; ?>                     
                        <?php endfor; ?>
                    <?php break; ?>
            <?php endswitch; ?>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/search.blade.php ENDPATH**/ ?>