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
                            <h3 class="box-title">Nouvel Evenement </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  enctype="multipart/form-data" action="<?php echo e(route('emission.update',$emission->id)); ?>">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">
                                <div class="form-group"  <?php if($errors->get('nomE')): ?> has-error <?php endif; ?> >
                                    <label for="exampleInputEmail1">Nom Emission</label>
                                    <input type="text" name="nomE" class="form-control" value="<?php echo e($emission->nomE); ?>" >
                                    <?php if($errors->get('nomE')): ?>
                                        <?php $__currentLoopData = $errors->get('nomE'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group"  <?php if($errors->get('nomAnim')): ?> has-error <?php endif; ?>>
                                    <label for="exampleInputPassword1">Nom Animateur</label>
                                    <input type="text" name="nomAnim" class="form-control" value="<?php echo e($emission->nomAnim); ?>">
                                    <?php if($errors->get('nomAnim')): ?>
                                        <?php $__currentLoopData = $errors->get('nomAnim'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group" <?php if($errors->get('prenomAnim')): ?> has-error <?php endif; ?>>
                                    <label for="prenomAnim">Prenom Animateur</label>
                                    <input type="text" name="prenomAnim" class="form-control" value="<?php echo e($emission->prenomAnim); ?>"  >
                                    <?php if($errors->get('prenomE')): ?>
                                        <?php $__currentLoopData = $errors->get('prenomE'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group" <?php if($errors->get('date')): ?> has-error <?php endif; ?>>
                                    <label for="date">Date</label>
                                    <input type="datetime-local" name="date" class="form-control" value="<?php echo e($emission->date); ?>" >
                                    <?php if($errors->get('date')): ?>
                                        <?php $__currentLoopData = $errors->get('date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group" <?php if($errors->get('description')): ?> has-error <?php endif; ?>>
                                    <label>Description</label>
                                    <textarea class="form-control"  name="description" rows="3">
                                        <?php echo e($emission->description); ?>


                                    </textarea>
                                    <?php if($errors->get('description')): ?>
                                        <?php $__currentLoopData = $errors->get('description'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group" <?php if($errors->get('image')): ?> has-error <?php endif; ?> >
                                    <label for="image">Image</label>
                                    <input name="image" type="file" value="<?php echo e($emission->image); ?>" >
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
                                <button type="submit" class="form-control btn btn-danger">Modifier</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('superadmin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>