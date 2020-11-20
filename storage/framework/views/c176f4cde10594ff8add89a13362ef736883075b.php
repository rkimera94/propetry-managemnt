<?php if(count($errors) > 0): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class=" alert alert-danger" >
    <?php echo e($error); ?>

  </div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  
<?php endif; ?>


<?php if(session('success')): ?>
  <div class="alert alert-sucess">
      <?php echo e(session('success')); ?>

  </div>
    
<?php endif; ?><?php /**PATH /Users/mac/Desktop/rkimera/laravel_project2/property_system/resources/views/inc/news.blade.php ENDPATH**/ ?>