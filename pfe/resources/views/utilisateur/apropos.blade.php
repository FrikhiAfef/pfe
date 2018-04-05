@extends('utilisateur.app')
@section('contenu')
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
            <div class="qt-header-bg" data-bgimage={{asset('utilisateur/imagestemplate/23.jpg')}}>
                <img src={{asset('utilisateur/imagestemplate/23.jpg')}} width="1600" height="700" alt="Featured image">
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
                                            Elgazala media center
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            <div class="qt-header-bottom">
                                <div class="qt-item-metas">
                                    <a class="qt-author-thumb" href="">
                                        <img src={{asset('utilisateur/imagestemplate/logo2.jpg')}} alt="" width="30" height="30">
                                    </a>
                                </div>
                               <a href="#" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                            </div>
                            <div class="qt-header-bg" data-bgimage='{{asset('utilisateur/imagestemplate/logo2.jpg')}}'>
                                <img src='{{asset('utilisateur/imagestemplate/logo2.jpg')}} alt="Featured image'width="80" height="90">
                            </div>
                        </div>
                        <div class="qt-item-content qt-card qt-the-content">
                            Elgazala media center est un espace de promotion et de médiatisation des startups, pme,
                            multinationales et des unités de recherche du pôle elgazala.<br>
                            Ce projet ouvrant dans le secteur de technologies de l'information et de la communication en Tunisie et à les accompagner lors de la
                            commercialisation et l’internationalisation de leurs produits et leurs solutions innovantes.
                            <br>Elgazala media center a pour objectif de promouvoir et d’encourager l’entreprenariat et
                            l’innovation dans le domaine des médias numériques et ce en mettant à la disposition
                            des porteurs de projets l’infrastructure et les outils nécessaires. Il a pour but aussi
                            de diffuser la culture digitale et de renforcer la veille technologique parmi les startups
                            installées au pôle et au cyber parcs régionaux. <br>Elgazala média center aspire à être
                            une plateforme facilitant le transfert de technologie entre les multinationales,
                            les startups du pôle d’une part
                            et les unités de recherches écosystème du pôle d’autre part.								</div>
                    </div>
                    <!-- POST STICKY ITEM END ========================= -->
                    <!-- POST ITEM ========================= -->
                    <div class="qt-part-archive-item">
                        <div class="qt-item-header">
                            <div class="qt-header-top">
                                <ul class="qt-tags">
                                    <li><a href="#">Elgazala Technopark</a></li>
                                </ul>
                            </div>
                            <div class="qt-header-mid qt-vc">
                                <div class="qt-vi">
                                    <h3 class="qt-title">
                                        <a href="#read" class="qt-text-shadow">
                                            Elgazala Technopark
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            <div class="qt-header-bottom">
                                <div class="qt-item-metas">
                                    <a class="qt-author-thumb" href="#">
                                        <img src='{{asset('utilisateur/imagestemplate/technopole.jpg')}}' alt="" width="30" height="30">
                                    </a>

                                </div>
                                <a href="#" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                            </div>
                            <div class="qt-header-bg" data-bgimage='{{asset('utilisateur/imagestemplate/elgazala.jpg')}}'>
                                <img src='{{asset('utilisateur/imagestemplate/elgazala.jpg')}}'alt="Featured image" width="300" height="150">
                            </div>
                        </div>
                        <div class="qt-item-content qt-card qt-the-content">
                            <p class="mt-30"> <h3>Qui sommes nous</h3><br>
                            Le Pôle Elgazala des Technologies de la Communication
                                « Elgazala Technopark» premier Technopark Tunisien, s'insère dans le
                                cadre d'une stratégie nationale<br>de développement et de promotion
                                de la recherche scientifique, de l'innovation <br>et de la production
                                à haute valeur ajoutée, à travers une cartographie de 10 technopoles
                                spécialisées chacune dans un secteur d'activité différent.</p>
                            <br><p>Le Technopark Elgazala, se présente comme un environnement
                                intégré pour le développement des petites et moyennes entreprises
                                ainsi que pour les multinationales et les grands groupes dans le
                                secteur des Technologies de l'Information et de la Communication. </p>

                        </div>
                    </div>
                    <!-- POST ITEM END ========================= -->
                    <hr class="qt-spacer-m">
                </div>

            </div>
        </div>

    </div>
    </div>
@endsection