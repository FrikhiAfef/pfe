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
                <li class="active">ACTUALITE</li>
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
                            <h3 class="box-title">Nouvelle Actualité</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  action="<?php echo e(route('actualite.store')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="box-body">
                                <div class="form-group"  <?php if($errors->get('titre')): ?> has-error <?php endif; ?> >
                                    <label for="exampleInputEmail1">Titre</label>
                                    <input type="text" name="titre" class="form-control"  placeholder="Enter le nom de l'emission">
                                    <?php if($errors->get('titre')): ?>
                                        <?php $__currentLoopData = $errors->get('titre'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                                <div class="form-group" <?php if($errors->get('description')): ?> has-error <?php endif; ?>>
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" rows="3" placeholder="Enter ...">

                                    </textarea>
                                    <?php if($errors->get('description')): ?>
                                        <?php $__currentLoopData = $errors->get('description'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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