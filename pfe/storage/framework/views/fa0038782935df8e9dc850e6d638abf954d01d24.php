<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('superadmin.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php echo $__env->make('superadmin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('superadmin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php $__env->startSection('main-content'); ?>
        <?php echo $__env->yieldSection(); ?>

        <?php echo $__env->make('superadmin.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



</div>

</body>

</html>
