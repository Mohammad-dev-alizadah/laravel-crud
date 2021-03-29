<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
      
      <form method="POST" action="<?php echo e(url('/insert')); ?>">
      <?php echo e(csrf_field()); ?>

        <div class="modal-header">
          <h4 class="modal-title">Add Post</h4>
          <?php if(count($errors) > 0): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="alert alert-danger"><?php echo e($error); ?></div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
          </div>
          
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
         
        </div>
        <div class="modal-footer">
          <a href="<?php echo e(url('/')); ?>" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
         
          <input type="submit" class="btn btn-success" value="submit">
        </div>
      </form>
    

<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>