

<?php $__env->startSection('content'); ?>
    <div class="Buscador">
        <?php for($i=0; $i < $longitud; $i++): ?>
            <?php if($info == $libro[$i]->titulo): ?>
                <div class="Buscador__BoxLibros">
                    <div class="Buscador__BoxLibros__Libro">
                        <div class="Buscador__BoxLibros__Libro__Img">
                            <a href="/view/<?php echo e($libro[$i]->id); ?>"><img src="<?php echo e(asset ($libro[$i]->foto)); ?> " /></a>
                        </div>
                        <a class="Buscador__BoxLibros__Libro__Titulo" href="/view/<?php echo e($libro[$i]->titulo); ?>"><?php echo e($libro[$i]->titulo); ?></a>
                        <a class="Buscador__BoxLibros__Libro__Autor" href="/search/<?php echo e($libro[$i]->autor->id); ?>"><?php echo e($libro[$i]->autor->nombre); ?></a>
                        <div class="Buscador__BoxLibros__Libro__BoxCategoria">
                            <a href="/search/<?php echo e($libro[$i]->categoria->tipo); ?>"><?php echo e($libro[$i]->categoria->tipo); ?></a>
                        </div>
                    </div>
                </div>
            
            <!--<?php elseif($info == $libro[$i]->autor->nombre): ?>
                <?php for($j=0; $j < $longitud; $j++): ?>{
                    <div class="Buscador__BoxLibros">
                        <?php if($libro[$j]->autor->nombre == $libro[$i]->autor->nombre): ?>
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
                    </div>
                }
                <?php endfor; ?>-->
            
            <?php elseif($info == 'libros'): ?>
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
            
            <?php elseif($info == 'autores'): ?>
                    <?php for($i=0; $i<7; $i++): ?>
                        <div class="Buscador__BoxAutores__Autor">
                            <div class="Buscador__BoxAutores__Autor__Img">
                                <a href="/search/<?php echo e($libro[$i]->autor->id); ?>"><img src="<?php echo e(asset ($libro[$i]->autor->foto)); ?>" /></a>
                            </div>
                            <a class="Buscador__BoxAutores__Autor__Nombre" href="/search/<?php echo e($libro[$i]->autor->id); ?>"><?php echo e($libro[$i]->autor->nombre); ?></a>
                        </div>
                    <?php endfor; ?>
            <?php endif; ?>
        <?php endfor; ?>

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