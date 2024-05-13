

<?php $__env->startSection('content'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">

        <h4>
            <?php echo e($prd->name); ?>

        </h4>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\laravel-mvc\example-app\resources\views/products/show.blade.php ENDPATH**/ ?>