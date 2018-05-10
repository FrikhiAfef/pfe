@extends('utilisateur.apptest')
@section('contenu')
    <div id="maincontent" class="qt-main">

        <div class="qt-container qt-vertical-padding-l ">
            <div class="row">

                <div class="col s12 m12 l8">

                    @foreach( $emissions as $emission)

                        <div class="qt-part-archive-item qt-featured">
                            <div class="qt-item-header">
                                <div class="qt-header-top">
                                    <ul class="qt-tags">
                                        <li><a href="#">Quotidienne</a></li>
                                    </ul>
                                    <!--<div class="qt-feedback">
                                        <a>17<i class="dripicons-message"></i></a><a>34<i class="dripicons-heart"></i></a>
                                    </div>-->
                                </div>
                                <div class="qt-header-mid qt-vc">
                                    <div class="qt-vi">
                                        <i class="dripicons-pin qt-icon-featured"></i>
                                        <h3 class="qt-title">
                                            <a href="#read" class="qt-text-shadow">
                                                {{$emission->nomE}}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="qt-header-bottom">
                                    <div class="qt-item-metas">
                                        <a class="qt-author-thumb" href="#author-url">
                                            <img src={{asset('utilisateur/imagestemplate/e1.jpg')}} alt="" width="30" height="30">
                                        </a>
                                        <div class="qt-texts">
                                            <p class="qt-author"><a href=""> {{$emission->prenomAnim}} {{$emission->nomAnim}} </a></p>
                                            <p class="qt-date"> {{$emission->date}}</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="qt-header-bg" data-bgimage='{{asset('utilisateur/imagestemplate\emissions\img11.jpeg')}}'>
                                    <img src='{{asset('utilisateur/imagestemplate\emissions\img11.jpeg')}} alt="Featured image'width="690" height="302">
                                </div>
                            </div>
                            <div class="qt-item-content qt-card qt-the-content">
                                {{$emission->description}}
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
@endsection