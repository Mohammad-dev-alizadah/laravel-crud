<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
      
      <form method="get" action="<?php echo e(url('/edit',array($article->id))); ?>">
      <?php echo e(csrf_field()); ?>

        <div class="modal-header">
          <h4 class="modal-title">Add Employee</h4>
          
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $article->title; ?>">
          </div>
          
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo $article->description;?></textarea>
          </div>
         
        </div>
        <div class="modal-footer">
          <a href="<?php echo e(url('/')); ?>" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
         
          <input type="submit" class="btn btn-success" value="submit">
        </div>
      </form>
    

<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>