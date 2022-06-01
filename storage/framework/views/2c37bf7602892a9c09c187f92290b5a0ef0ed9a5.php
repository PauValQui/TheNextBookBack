

<?php $__env->startSection('content'); ?>
    <div class="Slider">
        <button class="Slider__Button__Left"><img src='../../Img/IconosSVG/iconmonstr-arrow-left.svg' alt=""></i></button>

        <div class="Slider__Box">
            <?php for($i=1; $i <= 5; $i++): ?>
                <div class="Slider__Box__Item">
                    <img src="/Img/Slider/Slider<?php echo e($i); ?>.png"/>
                </div>
            <?php endfor; ?>
        </div>

        <button class="Slider__Button__Right"><img src='../../Img/IconosSVG/iconmonstr-arrow-right.svg' alt=""></button>
    </div>
    <div class="Novedades">

    </div>
    <div class="Autores">

    </div>
    <script src="js/home.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\TheNextBookBack\resources\views/home.blade.php ENDPATH**/ ?>