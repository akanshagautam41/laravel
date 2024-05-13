

<?php $__env->startSection('content'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div>
                <button><a href="<?php echo e(route('products.create')); ?>">Add New</a></button>
            </div>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
   
    <tr>
      <th scope="row">1</th>
      <td>
        <img src="images/<?php echo e($prd->image); ?>" alt="">
      </td>
      <td><?php echo e($prd->name); ?></td>
      <td><?php echo e($prd->detail); ?></td>
      <td>
        <button><a href="<?php echo e(route('products.show',$prd->id)); ?>">View</a></button>
        <button><a href="<?php echo e(route('products.edit',$prd->id)); ?>">Edit</a></button>
        <button><a href="">Delete</a></button>
      </td>
    </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\laravel-mvc\example-app\resources\views/products/index.blade.php ENDPATH**/ ?>