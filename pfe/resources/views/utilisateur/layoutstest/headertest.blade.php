<div class="qt-parentcontainer">
    <!-- QT MENUBAR  ================================ -->

    <!-- QT MENUBAR  ================================ -->
    <nav class="qt-menubar nav-wrapper qt-content-primary ">

        <!-- desktop menu  HIDDEN IN MOBILE AND TABLETS -->
        <ul class="qt-desktopmenu hide-on-xl-and-down">
            <li class="qt-logo-link"><a href="./" class="brand-logo qt-logo-text"><img src="{{asset('utilisateur/imagestemplate/logo.png')}}" alt="Featured image" width="84" height="84"></a></li>


            <li><a href="{{route('actualite')}}">Actualités</a>
            </li>
            <li class="right"><a href="page-popup.html" class="qt-popupwindow" data-name="Music Player" data-width="320" data-height="500"><i class="icon dripicons-duplicate"></i> Popup</a></li>
            <li class="right"><a href="#!" class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i>Live</a></li>
        </ul>




        <!-- mobile menu icon and logo VISIBLE ONLY TABLET AND MOBILE-->
        <ul class="qt-desktopmenu hide-on-xl-only ">
            <li><a href="#" data-activates="qt-mobile-menu" class="button-collapse qt-menu-switch qt-btn qt-btn-primary qt-btn-m"><i class="dripicons-menu"></i></a></li>
            <li><a href="#!" class="brand-logo qt-logo-text">EMC</a></li>
        </ul>
    </nav>
    <!-- mobile menu -->
    <div id="qt-mobile-menu" class="side-nav qt-content-primary">
        <ul class=" qt-side-nav">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="archive-chart.html">Actualités</a></li>
            <li><a href="archive-chart.html">Evenements</a></li>
            <li><a href="archive-chart.html">Programmes</a></li>
            <li><a href="archive-chart.html">Podcasts</a></li>
        </ul>
    </div>
    <!-- mobile toolbar -->
    <ul class="qt-mobile-toolbar qt-content-primary-dark qt-content-aside hide-on-large-only">
        <li><a href="page-popup.html" class="qt-popupwindow" data-name="Music Player" data-width="320" data-height="500"><i class="icon dripicons-duplicate"></i></a></li>
        <li><a href="#!" class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i></a></li>
    </ul>

</div>
@section('headerSection')
    @show