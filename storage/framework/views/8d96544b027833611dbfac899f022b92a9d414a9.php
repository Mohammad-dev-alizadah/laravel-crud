<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
      
      <h2><?php echo e($article->title); ?></h2>
      <h4><?php echo e($article->description); ?></h4>

    

<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>