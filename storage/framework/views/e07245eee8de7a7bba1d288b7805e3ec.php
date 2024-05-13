

<?php $__env->startSection('content'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div>
                <button><a href="<?php echo e(route('products.index')); ?>">Back</a></button>
            </div>
            <form action="<?php echo e(route('products.update',$prd->id)); ?>" method="post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Detail</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="detail">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Upload Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\laravel-mvc\example-app\resources\views/products/edit.blade.php ENDPATH**/ ?>