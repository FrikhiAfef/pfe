<?php $__env->startSection('main-content'); ?>
    <!-- contenu de l'entete de page -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">WEB RADIO</li>
                <li class="active">EVENEMENT</li>
            </ol>
            <br>
            <br>
            <!-- formulaire de creation de nouveau emission -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nouvel Evenement</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  action="<?php echo e(route('evenement.store')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="box-body">
                                <div class="form-group"  <?php if($errors->get('nomEven')): ?> has-error <?php endif; ?> >
                                    <label for="exampleInputEmail1">Nom Evenement</label>
                                    <input type="text" name="nomEven" class="form-control"  placeholder="Enter le nom de l'evenement">
                                    <?php if($errors->get('nomEven')): ?>
                                        <?php $__currentLoopData = $errors->get('nomEven'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group"  <?php if($errors->get('description')): ?> has-error <?php endif; ?>>
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea  name="description" class="form-control" rows="3"  placeholder="Entrer la desription">
                                    </textarea>
                                    <?php if($errors->get('description')): ?>
                                        <?php $__currentLoopData = $errors->get('description'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group" <?php if($errors->get('lieu')): ?> has-error <?php endif; ?>>
                                    <label for="prenomAnim">Lieu d'Evenement</label>
                                    <input type="text" name="lieu" class="form-control"  placeholder="Enter le lieu d'evenement">
                                    <?php if($errors->get('lieu')): ?>
                                        <?php $__currentLoopData = $errors->get('lieu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group" <?php if($errors->get('nbParticipant')): ?> has-error <?php endif; ?>>
                                    <label for="date">Nombre Participants</label>
                                    <input type="text" name="nbParticipant" class="form-control"  placeholder=" le nombre des participants est ..">
                                    <?php if($errors->get('nbParticipant')): ?>
                                        <?php $__currentLoopData = $errors->get('nbParticipant'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group" <?php if($errors->get('date')): ?> has-error <?php endif; ?>>
                                    <label>DATE</label>
                                    <input type="datetime-local" class="form-control" name="date"  placeholder="DE LUNDI À VENDREDI DE 12H00 À 14H00">


                                    <?php if($errors->get('date')): ?>
                                        <?php $__currentLoopData = $errors->get('date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group" <?php if($errors->get('image')): ?> has-error <?php endif; ?>>
                                    <label for="image">Image</label>
                                    <input name="image" type="file" >
                                    <?php if($errors->get('image')): ?>
                                        <?php $__currentLoopData = $errors->get('image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                </div>


                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> valider
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>

                                <button type="reset" class="btn btn-primary" value="Anuler">Annuler</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('superadmin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>