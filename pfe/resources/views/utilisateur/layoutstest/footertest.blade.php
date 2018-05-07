
<!-- PLAYER SIDEBAR ========================= -->
<div id="channelslist" class="side-nav qt-content-primary qt-right-sidebar">
    <a href="#" class="qt-btn qt-btn-secondary button-playlistswitch-close qt-close-sidebar-right" data-activates="channelslist"><i class="icon dripicons-cross"></i></a>
    <!-- PLAYER ========================= -->

    <!-- this is for xml radio feed -->
    <div id="qtShoutcastFeedData" class="hidden" data-style="" data-channel="1" data-host="41.231.36.126" data-port="8000"></div>

</div>

<script src="{{asset('utilisateur/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<script src="{{asset('utilisateur/js/jquery.js')}}"></script><!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->
<script src="{{asset('utilisateur/js/jquery-migrate.min.js')}}"></script><!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->

<!-- Framework -->
<script src="{{asset('utilisateur/js/materializecss/bin/materialize.min.js')}}"></script>

<!-- Cookies for player -->
<script src="{{asset('utilisateur/js/jquerycookie.js')}}"></script>

<!-- Slick carousel and skrollr -->
<script src="{{asset('utilisateur/components/slick/slick.min.js')}}"></script>
<script src="{{asset('utilisateur/components/skrollr/skrollr.min.js')}}"></script>

<!-- Swipebox -->
<script src="{{asset('utilisateur/components/swipebox/lib/ios-orientationchange-fix.js')}}"></script>
<script src="{{asset('utilisateur/components/swipebox/src/js/jquery.swipebox.min.js')}}"></script>

<!-- Countdown -->
<script src="{{asset('utilisateur/components/countdown/js/jquery.knob.js')}}"></script>
<script src="{{asset('utilisateur/components/countdown/js/jquery.throttle.js')}}"></script>
<script src="{{asset('utilisateur/components/countdown/js/jquery.classycountdown.min.js')}}"></script>


<!--[if IE]><script src="{{asset('utilisateur/components/soundmanager/script/excanvas.js')}}"></script><![endif]-->
<script src="{{asset('utilisateur/components/soundmanager/script/berniecode-animator.js')}}"></script>
<script src="{{asset('utilisateur/components/soundmanager/script/soundmanager2-nodebug.js')}}"></script>
<script src="{{asset('utilisateur/components/soundmanager/script/shoutcast.js')}}"></script>
<script src="{{asset('utilisateur/components/soundmanager/templates/qtradio-player/script/qt-360player-volumecontroller.js')}}"></script>

<!-- Popup -->
<script src="{{asset('utilisateur/components/popup/popup.js')}}"></script>


<script src="{{asset('utilisateur/js/qt-main.js')}}"></script>
@section('footertestSection')
@show