

<?php $__env->startSection('content'); ?>
    <div class="Slider">
        <div class="Slider__Box">
            <?php for($i=1; $i <= 5; $i++): ?>
                <div class="Slider__Box__Item">
                    <a href="/view/<?php echo e(trim($libro[$i]->titulo)); ?>"><img src="/Img/Slider/Slider<?php echo e($i); ?>.png"/></a> <!--Recoger el enlace del slider-->
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="Novedades">
        <div class="Novedades__BoxTitulo">
            <p>--Últimas Novedades--</p>
        </div>
        <div class="Novedades__BoxLibros">
            <?php for($i=0; $i<4; $i++): ?>
                <div class="Novedades__BoxLibros__Libro">
                    <div class="Novedades__BoxLibros__Libro__Img">
                        <a href="/view/<?php echo e($libro[$i]->id); ?>"><img src="<?php echo e($libro[$i]->foto); ?>" /></a>
                    </div>  
                    <a class="Novedades__BoxLibros__Libro__Titulo" href="/view/<?php echo e($libro[$i]->id); ?>"><?php echo e($libro[$i]->titulo); ?></a>
                    <a class="Novedades__BoxLibros__Libro__Autor" href="/search/<?php echo e($libro[$i]->autor->id); ?>"><?php echo e($libro[$i]->autor->nombre); ?></a>
                    <div class="Novedades__BoxLibros__Libro__BoxCategoria">
                        <a href="/search/<?php echo e($libro[$i]->categoria->tipo); ?>"><?php echo e($libro[$i]->categoria->tipo); ?></a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
    </div>
    <div class="Autores">
        <div class="Autores__Titulo">
            <p>--Autores--</p>
        </div>
        <div class="Autores__Box">
            <?php for($i=0; $i<3; $i++): ?>
                <div class="Autores__Box__Autor">
                    <div class="Autores__Box__Autor__Img">
                        <a href="/search/<?php echo e($libro[$i]->autor->id); ?>"><img src="<?php echo e($libro[$i]->autor->foto); ?>" /></a>
                    </div>
                    <a class="Autores__Box__Autor__Nombre" href="/search/<?php echo e($libro[$i]->autor->id); ?>"><?php echo e($libro[$i]->autor->nombre); ?></a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <script src="js/home.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/home.blade.php ENDPATH**/ ?>