@extends('utilisateur.apptest')
@section('contenu')
    <div id="maincontent" class="qt-main">


        <div class="qt-container qt-vertical-padding-l  qt-archive-team">
            <div class="row">

                  @foreach($galeries as $galerie)
                    <div class="col s12 m6 l4">
                        <div class="qt-part-archive-item qt-item-chart">
                            <div class="qt-item-header">
                                <div class="qt-header-top">
                                    <ul class="qt-tags">
                                        <li><a href="#"></a></li>
                                    </ul>

                                </div>
                                <div class="qt-header-mid qt-vc">
                                    <div class="qt-vi">
                                        <h3 class="qt-title">
                                            <a href="#" class="qt-text-shadow qt-ellipsis qt-t">
                                                {{$galerie->titre}}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="qt-header-bottom">
                                    <a href="#" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                                </div>
                                <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/gallerie/01.jpg')}}">
                                    <img src="{{asset('utilisateur/imagestemplate/gallerie/01.jpg')}}" alt="Featured image" width="690" height="690">
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>

    </div>
@endsection