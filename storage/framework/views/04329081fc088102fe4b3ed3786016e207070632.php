

<?php $__env->startSection('content'); ?>
    <div class="Buscador">
        <?php for($i=0; $i <= $longitud; $i++): ?>
            <?php if($info == str_replace(" ", "%20" ,$libro[$i]->titulo)): ?>{
                <div class="Buscador__BoxLibros">
                    <div class="Buscador__BoxLibros__Libro">
                        <div class="Buscador__BoxLibros__Libro__Img">
                            <a href="/view/<?php echo e($libro[$i]->titulo); ?>"><img src="<?php echo e($libro[$i]->foto); ?>" /></a>
                        </div>
                        <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/<?php echo e($libro[$i]->titulo); ?>"><?php echo e($libro[$i]->titulo); ?></a>
                        <a class="Buscador__BoxLibros__Libro__Autor" href="/search/<?php echo e($libro[$i]->autor->nombre); ?>"><?php echo e($libro[$i]->autor->nombre); ?></a>
                        <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                            <a href="/search/<?php echo e($libro[$i]->categoria->tipo); ?>"><?php echo e($libro[$i]->categoria->tipo); ?></a>
                        </div>
                    </div>
                </div>
            }
            <?php elseif($info == str_replace(" ", "%20" ,$libro[$i]->autor->nombre)): ?>{
                <?php for($j=0; $j <= $longitud; $j++): ?>{
                    <div class="Buscador__BoxLibros">
                        <?php if($libro[$j]->autor->nombre == $libro[$i]->autor->nombre): ?>
                            <div class="Buscador__BoxLibros__Libro">
                                <div class="Buscador__BoxLibros__Libro__Img">
                                    <a href="/view/<?php echo e($libro[$j]->titulo); ?>"><img src="<?php echo e($libro[$j]->foto); ?>" /></a>
                                </div>
                                <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/<?php echo e($libro[$j]->titulo); ?>"><?php echo e($libro[$j]->titulo); ?></a>
                                <a class="Buscador__BoxLibros__Libro__Autor" href="/search/<?php echo e($libro[$j]->autor->nombre); ?>"><?php echo e($libro[$j]->autor->nombre); ?></a>
                                <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                    <a href="/search/<?php echo e($libro[$j]->categoria->tipo); ?>"><?php echo e($libro[$j]->categoria->tipo); ?></a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                }
                <?php endfor; ?>
            }
            <?php elseif($info == 'libros'): ?>
                <div class="Buscador__BoxLibros">
                    <?php for($i=0; $i<$longitud; $i++): ?>
                        <div class="Buscador__BoxLibros__Libro">
                            <div class="Buscador__BoxLibros__Libro__Img">
                                <a href="/view/<?php echo e($libro[$i]->titulo); ?>"><img src="<?php echo e($libro[$i]->foto); ?>" /></a>
                            </div>
                            <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/<?php echo e($libro[$i]->titulo); ?>"><?php echo e($libro[$i]->titulo); ?></a>
                            <a class="Buscador__BoxLibros__Libro__Autor" href="/search/<?php echo e($libro[$i]->autor->nombre); ?>"><?php echo e($libro[$i]->autor->nombre); ?></a>
                            <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                                <a href="/search/<?php echo e($libro[$i]->categoria->tipo); ?>"><?php echo e($libro[$i]->categoria->tipo); ?></a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            
            <?php elseif($info == 'autores'): ?>
                <div class="Autores__Box">
                    <?php for($i=0; $i<7; $i++): ?>
                        <div class="Autores__Box__Autor">
                            <div class="Autores__Box__Autor__Img">
                                <a href="/search/<?php echo e($libro[$i]->autor->nombre); ?>"><img src="<?php echo e($libro[$i]->autor->foto); ?>" /></a>
                            </div>
                            <a class="Autores__Box__Autor__Nombre" href="/search/<?php echo e($libro[$i]->autor->nombre); ?>"><?php echo e($libro[$i]->autor->nombre); ?></a>
                        </div>
                    <?php endfor; ?>
                </div>
            
            <?php endif; ?>
        <?php endfor; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/search.blade.php ENDPATH**/ ?>