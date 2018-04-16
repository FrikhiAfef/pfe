<!doctype html>
<html class="no-js" lang="en">
<head>
<?php echo $__env->make('utilisateur.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>

<?php echo $__env->make('utilisateur.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('contenu'); ?>
    <?php echo $__env->yieldSection(); ?>

<?php echo $__env->make('utilisateur.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
