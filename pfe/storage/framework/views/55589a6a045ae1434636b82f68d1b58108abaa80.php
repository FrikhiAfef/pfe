<div class="col-md-12">
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>


    <div class="pull-right">
        <a href="<?php echo e(url('emission.create')); ?>" class="btn btn-success">Nouvelle Emission</a>
    </div>
</div>