<?php $__env->startSection('contenu'); ?>
    <div id="maincontent" class="qt-main">
        <!-- ======================= HEADER SECTION ======================= -->
        <!-- HEADER CAPTION ========================= -->
        <div class="qt-pageheader qt-negative">
            <div class="qt-container">
                <h1 class="qt-caption qt-spacer-s">
                    À PROPOS
                </h1>
                <h4 class="qt-subtitle">
                    Elgazala Media Center
                </h4>
            </div>
            <div class="qt-header-bg" data-bgimage=<?php echo e(asset('utilisateur/imagestemplate/23.jpg')); ?>>
                <img src=<?php echo e(asset('utilisateur/imagestemplate/23.jpg')); ?> width="1600" height="700" alt="Featured image">
            </div>
        </div>
        <!-- HEADER CAPTION END ========================= -->
        <!-- ======================= CONTENT SECTION ======================= -->
        <div class="qt-container qt-vertical-padding-l ">
            <div class="row">
                <div class="col s12 m12 l1 qt-pushpin-container">
                    <div class="qt-pushpin">
                        <!-- SHARE FUNCTIONS ================================================== -->
                        <ul class="qt-sharepage qt-content-primary">
                            <li class="hide-on-med-and-down">
                                <i class="qticon-share qt-shareicon qt-content-primary-dark"></i>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-sharetype="facebook" data-name="Share" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-sharetype="twitter" data-name="Share" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-sharetype="google" data-name="Share" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-sharetype="pinterest" data-name="Share" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="qt-btn-primary qt-sharelink"><i class="dripicons-heart"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- SHARE FUNCTIONS ================================================== -->
                    </div>
                    <hr class="qt-spacer-m">
                </div>
                <div class="col s12 m12 l8">
                <?php $__currentLoopData = $apropos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apropo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <!-- POST STICKY ITEM ========================= -->
                        <div class="qt-part-archive-item qt-featured">
                            <div class="qt-item-header">
                                <div class="qt-header-top">
                                    <ul class="qt-tags">
                                        <li><a href="#">EMC</a></li>
                                    </ul>
                                </div>
                                <div class="qt-header-mid qt-vc">
                                    <div class="qt-vi">
                                        <h3 class="qt-title">
                                            <a href="#read" class="qt-text-shadow">
                                                <?php echo e($apropo->titre); ?>

                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="qt-header-bottom">
                                    <div class="qt-item-metas">
                                        <a class="qt-author-thumb" href="">
                                            <img src=<?php echo e(asset('utilisateur/imagestemplate/logo2.jpg')); ?> alt="" width="30" height="30">
                                        </a>
                                    </div>
                                    <a href="#" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                                </div>
                                <div class="qt-header-bg" data-bgimage='<?php echo e(asset('utilisateur/imagestemplate/logo2.jpg')); ?>'>
                                    <img src='<?php echo e(asset('utilisateur/imagestemplate/logo2.jpg')); ?> alt="Featured image'width="80" height="90">
                                </div>
                            </div>
                            <div class="qt-item-content qt-card qt-the-content">
                                <?php echo e($apropo->description); ?>								</div>
                        </div>
                        <!-- POST STICKY ITEM END ========================= -->
                        <!-- POST ITEM ========================= -->

                        <!-- POST ITEM END ========================= -->
                        <hr class="qt-spacer-m">

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </div>
        </div>

    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('utilisateur.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>