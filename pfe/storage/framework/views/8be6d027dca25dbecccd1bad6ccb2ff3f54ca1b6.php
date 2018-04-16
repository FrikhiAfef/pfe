<?php $__env->startSection('headSection'); ?>
    <link href="<?php echo e(asset('administrateur/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                 <li class="active">WEB RADIO</li>
                <li class="active">PODCASTS</li>
            </ol>
            <br>
            <br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">La liste des Podcasts</h3>
                    <br>

                    <div class="col-md-12">
                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('success')); ?>

                            </div>
                        <?php endif; ?>
                        <br>

                        <div class="col-lg-offset-5">
                            <a href="<?php echo e(route('podcast.create')); ?>" class="btn btn-success">Nouvelle Enregistrement</a>
                        </div>
                    </div>
                </div>
                <br>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Titre</th>
                            <th>Image</th>
                            <th>Desvription</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <body>
                        <?php $__currentLoopData = $podcasts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $podcast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($podcast -> id); ?> </td>
                                <td><?php echo e($podcast -> titre); ?></td>
                                <td><?php echo e($podcast -> image); ?></td>
                                <td><?php echo e($podcast -> description); ?></td>
                                <td>
                                    <form action="<?php echo e(route('podcast.destroy',$podcast->id)); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('DELETE')); ?>

                                        <a href="<?php echo e(route('podcast.show',$podcast->id)); ?>" class="btn btn-primary">Details</a>
                                        <a href="<?php echo e(route('podcast.edit',$podcast->id)); ?>" class="btn btn-default">Editer</a>
                                        <button type="submit" onclick="return confirm('Vraiment supprimer cette podcast ?')"  class="btn btn-danger">Suprimer</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </body>

                    </table>
                </div>

            </div>

        </section>
    </div>

<?php $__env->startSection('footerSection'); ?>
    <script src="<?php echo e(asset('administrateur/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('administrateur/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

<?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>