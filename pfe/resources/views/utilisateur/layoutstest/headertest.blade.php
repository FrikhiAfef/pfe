<div class="qt-parentcontainer">

    <nav class="qt-menubar nav-wrapper qt-content-primary ">

        <!-- mobile menu icon and logo VISIBLE ONLY TABLET AND MOBILE-->
        <ul class="qt-desktopmenu hide-on-xl-only ">

            <li><a href="#" data-activates="qt-mobile-menu" class="button-collapse qt-menu-switch qt-btn qt-btn-primary qt-btn-m"><i class="dripicons-menu"></i></a></li>

            <li class="qt-logo-link"><a href="./" class="brand-logo qt-logo-text"> <img src="{{asset('utilisateur/imagestemplate/logo.png')}}" alt="Featured image" width="74" height="74"></a></li>

        </ul>
            </br>
        <ul >
            <li><a href="{{route('acceuil')}}">Acceuil</a></li>
            <li><a href="{{route('actualite')}}">Act</a></li>
            <li><a href="{{route('evenement')}}">Event</a></li>
            <li><a href="{{route('programme')}}">Prog</a></li>
            <li><a href="{{route('podcast')}}">Podcast</a></li>
        </ul>
    </nav>
    <!-- mobile menu -->
    <div id="qt-mobile-menu" class="side-nav qt-content-primary">
        <ul class=" qt-side-nav">
            <li><a href="{{route('acceuil')}}">Accueil</a></li>
            <li><a href="{{route('actualite')}}">Actualités</a></li>
            <li><a href="{{route('evenement')}}">Evenements</a></li>
            <li><a href="{{route('programme')}}">Programmes</a></li>
            <li><a href="{{route('podcast')}}">Podcasts</a></li>
            <li><a href="{{route('emission')}}">Emissions</a></li>
            <li><a href="{{route('equipe')}}">Equipes</a></li>
            <li><a href="{{route('galerie')}}">Galeries</a></li>
            <li><a href="{{route('jumpin')}}">Jump in</a></li>
        </ul>
    </div>
    <!-- mobile toolbar -->
    <ul class="qt-mobile-toolbar qt-content-primary-dark qt-content-aside hide-on-large-only">
        <li><a href="#!" class="button-playlistswitch" data-activates="channelslist">LIVE<i class="icon dripicons-media-play"></i></a></li>
    </ul>

</div>
@section('headertestSection')
    @show