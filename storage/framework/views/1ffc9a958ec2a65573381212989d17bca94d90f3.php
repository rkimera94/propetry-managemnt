<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Edit news</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(url('/dataportal')); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit news</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="conatiner-fluid">
      <form method="post" action="<?php echo e(route('admin.news.update', $news->id)); ?>" enctype="multipart/form-data" >
        <?php echo method_field('PUT'); ?>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        
        <div class="form-group"> 
          <div class="row">
            <label class="col-md-3"> News Title</label>
            <div class="col-md-6"><input type="text" name="title" class="form-control"></div>
            <div class="clearfix"></div>

          </div>

        </div>


        <div class="form-group"> 
          <div class="row">
            <label class="col-md-3">Title</label>
          <div class="col-md-6"><input type="text" name="title" class="form-control" value="<?php echo e($news->title); ?>"></div>
            <div class="clearfix"></div>

          </div>

        </div>

        <div class="form-group"> 
          <div class="row">
            <label class="col-md-3">Author</label>
          <div class="col-md-6"><input type="text" name="author" class="form-control" value="<?php echo e($news->author); ?>"></div>
            <div class="clearfix"></div>

          </div>

        </div>

        <div class="form-group"> 
            <div class="row">
              <label class="col-md-3">Image</label>
              <div class="col-md-6"><input type="file" name="image" ></div>
              <div class="clearfix"></div>
            <img src="<?php echo e('storage/news/'.$news->image); ?>" style="width: 150px;" >
  
            </div>
  
          </div>




        <div class="form-group"> 
          <div class="row">
            <label class="col-md-3">Description</label>
            <div class="col-md-6">
              <textarea name="description" class="form-control"  >
                  <?php echo e($news->description); ?>

              </textarea>
            </div>
            <div class="clearfix"></div>

          </div>

        </div>


        <div class="form-group">
          <input type="submit" class="btn btn-info" value="Save">

        </div>

      </form>
    

    </div>
  </section>






    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.portal2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/rkimera/laravel_project2/datascience/resources/views/portal/news/edit.blade.php ENDPATH**/ ?>