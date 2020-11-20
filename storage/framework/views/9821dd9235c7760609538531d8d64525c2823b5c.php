<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Property Mangement</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(url('/dataportal')); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Management </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="conatiner-fluid">
       

      <p>
      <a href="<?php echo e(route('edu.property.create')); ?>" class="btn btn-primary"> CREATE NEW PROPETY</a>
      <a href="<?php echo e(route('propertyAttribute')); ?>" class="btn btn-primary">ADD PROPERTY ATTRIBUTES</a>
      </p>
      <table class="table table-bordered table-striped">
        <tr>
          <th>PROPERTY NAME </th> 
          <th>PROPERTY TYPE </th>
          <th>NUMBER OF UNITS</th>
          <th>UNIT DESCRIPTION</th>
          <th>ADDRESS_1</th>
          <th>ADDRESSS_2</th>
          <th>ADDRESS_3</th>
          <th>VILLAGE</th>
          <th>ACTION</th>

        </tr>
        <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <a href="#"><td><?php echo e($c->property_title); ?></td> </a>
            <td><?php echo e($c->property_type); ?></td>
            <td><?php echo e($c->number_units); ?></td>
            <td><?php echo e($c->unit_description); ?></td>
            <td><?php echo e($c->Address_1); ?></td>
            <td><?php echo e($c->Address_2); ?></td>
            <td><?php echo e($c->Address_3); ?></td>
            <td><?php echo e($c->village); ?></td>
            <td>
              <a href="<?php echo e(route('edu.property.edit', $c->id)); ?>" class="btn btn-info"> Edit</a>
              <a href="#" class="btn btn-danger "> Delete</a>

            </td>
          </tr>         
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>

    </div>
  </section>






    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.portal2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/rkimera/laravel_project2/property_system/resources/views/portal/education/index.blade.php ENDPATH**/ ?>