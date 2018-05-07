@extends('utilisateur.apptest')
@section('contenu')

    <div class="qt-container qt-spacer-m">

        <hr class="qt-spacer-s">
        <!-- SLIDESHOW POST ================================================== -->


        <div class="qt-slickslider-container qt-slickslider-externalarrows">
            @foreach($actualites as $actualite)
            <div class="qt-part-archive-item qt-featured">
                <div class="qt-item-header">
                    <div class="qt-header-top">
                        <ul class="qt-tags">
                            <li><a href="#">{{$actualite->titre}}</a></li>
                        </ul>

                    </div>
                    <div class="qt-header-mid qt-vc">
                        <div class="qt-vi">

                            <h3 class="qt-title">
                                <a href="#read" class="qt-text-shadow">{{$actualite->titre}}	</a>
                            </h3>
                        </div>
                    </div>
                    <div class="qt-header-bottom">


                        <a href="#" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                    </div>
                    <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/13.jpg')}}">
                        <img src="{{asset('utilisateur/imagestemplate/13.jpg')}}" alt="Featured image" width="690" height="302">
                    </div>
                </div>
                <div class="qt-item-content qt-card qt-the-content">
                    <p>{{$actualite->description}}</p>
                </div>
            </div>

        </div>
        @endforeach
    </div>

@endsection
