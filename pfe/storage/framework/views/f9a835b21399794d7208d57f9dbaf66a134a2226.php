<div class="qt-footer qt-footerwidgets">
    <div class="qt-section qt-footer-widgets qt-content-primary-light">
        <div class="qt-container">
            <h2 class="qt-footer-logo"><a href="./" class="brand-logo qt-logo-text">Elgazala Media Center<span></span></a></h2>
            <div class="qt-widgets qt-widgets-footer qt-negative qt-spacer-m row">
                <div class="col s12 m3 l3">
                    <div class="qt-widget">
                        <h5 class="qt-caption-small"><span>Newsletter</span></h5> Abonnez-vous maintenant à la newsletter pour recevoir des mises à jour hebdomadaires.

                        <hr class="qt-spacer-s">
                        <form method="post" action="#newsletter" class="qt-inline-form">
                            <div class="row qt-nopadding">
                                <div class="col s12 m8 l9">
                                    <input placeholder="Votre email" value="" type="text" class="validate qt-input-s">
                                </div>
                                <div class="col s12 m4 l3">
                                    <input type="button" value="submit" class="qt-btn qt-btn-secondary qt-btn-s qt-fullwidth">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col s12 m3 l3">
                    <div class="qt-widget">
                        <h5 class="qt-caption-small"><span>Contacts</span></h5>
                        <div class="qt-widget-contacts">
                            <p>
                                <i class="qticon-home"></i><a href="">Elgazala Technopark, Raoued, Gouvernorat de l'Ariana, 2088 Ariana - Tunisie</a>
                            </p>
                            <p>
                                <i class="qticon-at-sign"></i><a href="">contact@elgazala.tn
                                </a>
                            </p>
                            <p>
                                <i class="qticon-phone"></i><a href="tel:1-847-555-5555">(+216) 71 857 757										</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--<div class="col s12 m3 l3">
                    <div class="qt-widget">
                        <h5 class="qt-caption-small"><span>Contacts</span></h5>
                        <div class="qt-widget-about">
                            <p>
                                We are a young and dynamic radio station which wants to bring happyness in your life.
                                <br>
                                <a href="http://www.qantumthemes.com">Discover more <i class="dripicons-arrow-thin-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>-->
                <div class="col s12 m3 l3">
                    <div class="qt-widget">
                        <h5 class="qt-caption-small"><span>LIENS PRINCIPAUX
                                </span></h5>
                        <ul class="qt-widget-menu qt-list-chevron">
                            <li>
                                <a href="http://www.qantumthemes.com">Accueil</a>
                            </li>
                            <li>
                                <a href="http://www.qantumthemes.com">Emissions</a>
                            </li>
                            <li>
                                <a href="http://www.qantumthemes.com">Evénements</a>
                            </li>
                            <li>
                                <a href="http://www.qantumthemes.com">Podcast</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="qt-header-bg" data-bgimage="<?php echo e(asset('utilisateur/imagestemplate/full-1600-700.jpg')); ?>">
            <img src="<?php echo e(asset('utilisateur/imagestemplate/full-1600-700.jpg')); ?>" alt="Featured image" width="690" height="302">
        </div>
    </div>
    <div class="qt-footer-bottom qt-content-primary-dark">
        <div class="qt-container">
            <div class="row">
                <div class="col s12 m12 l8">
                    Copyright 2018 Clever Technologies
                    <ul class="qt-menu-footer qt-small qt-list-chevron ">
                        <li><a href="#"><i class="dripicons-chevron-right"></i>à propos</a></li>
                        <li><a href="archive-members.html"><i class="dripicons-chevron-right"></i>Équipe</a></li>
                        <li><a href="login.html"><i class="dripicons-chevron-right"></i>Connexion</a></li>
                        <li><a href="login2.blade.php"><i class="dripicons-chevron-right"></i>Inscription</a></li>

                    </ul>
                </div>
                <div class="col s12 m12 l4">
                    <ul class="qt-menu-social">
                        <li class="right"><a href="#"><i class="qticon-beatport"></i></a></li>
                        <li class="right"><a href="#"><i class="qticon-facebook"></i></a></li>
                        <li class="right"><a href="#"><i class="qticon-twitter"></i></a></li>
                        <li class="right"><a href="#"><i class="qticon-youtube"></i></a></li>
                        <li class="right"><a href="#"><i class="qticon-soundcloud"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- PLAYER SIDEBAR ========================= -->
<div id="channelslist" class="side-nav qt-content-primary qt-right-sidebar">
    <a href="#" class="qt-btn qt-btn-secondary button-playlistswitch-close qt-close-sidebar-right" data-activates="channelslist"><i class="icon dripicons-cross"></i></a>
    <!-- PLAYER ========================= -->
    <div id="qtplayercontainer" data-playervolume="true" data-accentcolor="#dd0e34" data-accentcolordark="#ff0442" data-textcolor="#ffffff" data-soundmanagerurl="./components/soundmanager/swf/" class="qt-playercontainer qt-playervolume qt-clearfix qt-content-primary">
        <div class="qt-playercontainer-content qt-vertical-padding-m">
            <div class="qt-playercontainer-header">
                <h5 class="qt-text-shadow small"></h5>
                <h3 id="qtradiotitle" class="qt-text-shadow"></h3>
                <h4 id="qtradiosubtitle" class="qt-thin qt-text-shadow small">Elgazela Media center</h4>
            </div>
            <div class="qt-playercontainer-musicplayer" id="qtmusicplayer">
                <div class="qt-musicplayer">
                    <div class="ui360 ui360-vis qt-ui360">
                        <a id="playerlink" href="http://freshly-ground.com/data/audio/sm2/Adrian%20Glynn%20-%20Blue%20Belle%20Lament.mp3"></a>
                    </div>
                </div>
            </div>
            <div class="qt-playercontainer-data qt-container qt-text-shadow small">
                <h6 class="qt-inline-textdeco">
                    <span></span>
                </h6>
                <div class="qt-t qt-current-track">

                </div>
                <hr class="qt-inline-textdeco">
            </div>
        </div>
        <div id="playerimage" class="qt-header-bg" data-bgimage="<?php echo e(asset('utilisateur/imagestemplate/full-1600-700.jpg')); ?>">
            <img src="<?php echo e(asset('utilisateur/imagestemplate/full-1600-700.jpg')); ?>" alt="Featured image" width="690" height="302">
        </div>
    </div>
    <!-- this is for xml radio feed -->
    <div id="qtShoutcastFeedData" class="hidden" data-style="" data-channel="1" data-host="41.231.36.126" data-port="8000"></div>
    <!-- PLAYER END ========================= -->
    <!-- CHANNELS LIST ========================= -->
    <div class="qt-part-channels-list">
        <ul class="qt-content-aside qt-channelslist qt-negative">
            <li class="qt-channel">
                <a href="#!" class="qt-ellipsis" data-title="ElGhazala" data-subtitle=" Media Center" data-background="<?php echo e(asset('utilisateur/imagestemplate/photo-squared-500-500.jpg')); ?>" data-logo="imagestemplate/radio-logo.png" data-playtrack="http://41.231.36.126:8000/live" data-host="41.231.36.126" data-port="8000" data-stats_path="" data-played_path="" data-channel="">
                    <i class="dripicons-media-play"></i> Smooth Tek
                </a>
            </li>

        </ul>
    </div>
    <!-- CHANNELS LIST END ========================= -->
</div>
<!-- PLAYER SIDEBAR END ========================= -->

<!-- QT BODY END ================================ -->

<!-- QT FOOTER SCRIPTS ================================ -->
<script src="<?php echo e(asset('utilisateur/js/modernizr-2.8.3-respond-1.4.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('utilisateur/js/jquery.js')); ?>"></script><!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->
<script src="<?php echo e(asset('utilisateur/js/jquery-migrate.min.js')); ?>"></script><!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->

<!-- Framework -->
<script src="<?php echo e(asset('utilisateur/js/materializecss/bin/materialize.min.js')); ?>"></script>

<!-- Cookies for player -->
<script src="<?php echo e(asset('utilisateur/js/jquerycookie.js')); ?>"></script>

<!-- Slick carousel and skrollr -->
<script src="<?php echo e(asset('utilisateur/components/slick/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('utilisateur/components/skrollr/skrollr.min.js')); ?>"></script>

<!-- Swipebox -->
<script src="<?php echo e(asset('utilisateur/components/swipebox/lib/ios-orientationchange-fix.js')); ?>"></script>
<script src="<?php echo e(asset('utilisateur/components/swipebox/src/js/jquery.swipebox.min.js')); ?>"></script>

<!-- Countdown -->
<script src="<?php echo e(asset('utilisateur/components/countdown/js/jquery.knob.js')); ?>"></script>
<script src="<?php echo e(asset('utilisateur/components/countdown/js/jquery.throttle.js')); ?>"></script>
<script src="<?php echo e(asset('utilisateur/components/countdown/js/jquery.classycountdown.min.js')); ?>"></script>

<!-- Soundmanager2 -->
<!--[if IE]><script src="<?php echo e(asset('utilisateur/components/soundmanager/script/excanvas.js')); ?>"></script><![endif]-->
<script src="<?php echo e(asset('utilisateur/components/soundmanager/script/berniecode-animator.js')); ?>"></script>
<script src="<?php echo e(asset('utilisateur/components/soundmanager/script/soundmanager2-nodebug.js')); ?>"></script>
<script src="<?php echo e(asset('utilisateur/components/soundmanager/script/shoutcast.js')); ?>"></script>
<script src="<?php echo e(asset('utilisateur/components/soundmanager/templates/qtradio-player/script/qt-360player-volumecontroller.js')); ?>"></script>

<!-- Popup -->
<script src="<?php echo e(asset('utilisateur/components/popup/popup.js')); ?>"></script>


<!-- MAIN JAVASCRIPT FILE ================================ -->
<script src="<?php echo e(asset('utilisateur/js/qt-main.js')); ?>"></script>
<?php $__env->startSection('footerSection'); ?>
<?php echo $__env->yieldSection(); ?>