<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Categories</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(url('/dataportal')); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Categories </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="conatiner-fluid">
      <p>
        <a href="#" class="btn btn-primary"> Add new category</a>
      </p>
      <table class="table table-bordered table-striped">
        <tr>
          <th>id</th>
          <th>title</th>
          <th>Action</th>
        </tr>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>

          <td><?php echo e($c->id); ?></td>
            <td><?php echo e($c->title); ?></td>

            <td> 
              <a href="#" class="btn btn-info"> Edit</a>
              <a href="#" class="btn btn-danger "> Delete</a>

            </td>
          </tr>
           

            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>

    </div>
  </section>






    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/rkimera/laravel_project2/complaint analysis/resources/views/portal/category/index.blade.php ENDPATH**/ ?>