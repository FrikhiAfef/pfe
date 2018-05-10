@extends('utilisateur.apptest')
@section('contenu')
<div id="maincontent" class="qt-main">
    <!-- ======================= SLIDESHOW SECTION ======================= -->
    <!-- SLIDESHOW FULLSCREEN ================================================== -->
    <div class="qt-slickslider-container">
        <div class="qt-slickslider qt-slickslider-single qt-text-shadow qt-black-bg"  data-centermode="true" data-pauseonhover="true" data-autoplay="true" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="true" data-variablewidthmobile="true">
            <!-- SLIDESHOW ITEM -->
        @foreach($actualites as $actualite)
            <!-- SLIDESHOW ITEM -->
            <div class="qt-slick-opacity-fx qt-item">
                <!-- POST HERO ITEM ========================= -->
                <div class="qt-part-archive-item qt-part-item-post-hero">
                    <div class="qt-item-header">
                        <div class="qt-header-mid qt-vc">
                            <div class="qt-vi">
                                <h3 class="qt-title">
                                    <a href="#" class="qt-text-shadow">
                                        {{$actualite->titre}}
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div class="qt-header-bottom">
                            <div class="qt-item-metas">
                                <a class="qt-author-thumb" href="#">
                                    <img src="{{asset('utilisateur/imagestemplate/author-thumbnail.jpg')}}" alt="" width="30" height="30">
                                </a>
                                <div class="qt-texts">
                                    <p class="qt-date"> {{$actualite->date}}</p>
                                </div>
                            </div>

                        </div>
                        <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/14.jpeg')}}">
                            <img src="{{asset('utilisateur/imagestemplate/14.jpeg')}}" alt="Featured image" width="690" height="302">
                        </div>
                    </div>
                </div>
                <!-- POST HERO ITEM END ========================= -->
            </div>
            @endforeach
            <!-- SLIDESHOW ITEM -->
        </div>
    </div>

    <div class="qt-container qt-spacer-m">

        <hr class="qt-spacer-s">



        <div class="qt-slickslider-container qt-slickslider-externalarrows">
            @foreach($actualites as $actualite)
            <div class="qt-part-archive-item qt-featured">
                <div class="qt-item-header">
                    <div class="qt-header-top">
                        <ul class="qt-tags">
                            <li><a href="#"> {{$actualite->titre}}</a></li>
                        </ul>

                    </div>
                    <div class="qt-header-mid qt-vc">
                        <div class="qt-vi">

                            <h3 class="qt-title">
                                <a href="#read" class="qt-text-shadow">	</a>
                            </h3>
                        </div>
                    </div>

                    <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/13.jpg')}}">
                        <img src="{{asset('utilisateur/imagestemplate/13.jpg')}}" alt="Featured image" width="690" height="302">
                    </div>
                </div>
                <div class="qt-item-content qt-card qt-the-content">
                    <p>{{$actualite->description}}</p>
                    <div class="qt-texts">
                        <p class="qt-date">  {{$actualite->date}}</p>
                    </div>
                </div>

            </div>
@endforeach


        </div>

    </div>


</div>


    @endsection
