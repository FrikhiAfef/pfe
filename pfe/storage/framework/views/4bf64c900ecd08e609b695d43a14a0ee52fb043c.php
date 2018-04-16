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
                <li class="active">EVENEMENTS</li>
            </ol>
            <br>
            <br>

            <div class="col-sm-offset-4 col-sm-4">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Fiche de l'Evenement</div>
                    <div class="panel-body">
                        <p>Nom De L'EVENEMENT : <?php echo e($evenements->nomEven); ?></p>
                          <p>Description : <?php echo e($evenements->description); ?></p>
                            <p>Lieu : <?php echo e($evenements->lieu); ?></p>
                        <p>Nombre participants : <?php echo e($evenements->nbParticipant); ?></p>
                          <p>Date : <?php echo e($evenements->date); ?></p>
                            <p>Image : <?php echo e($evenements->image); ?></p>
                    </div>
                </div>
                <a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>
            </div>



        </section>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('superadmin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>