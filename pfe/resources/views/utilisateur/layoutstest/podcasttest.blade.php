@extends('utilisateur.apptest')
@section('contenu')


    @foreach($podcasts as $podcast)
        <div class="col s12 m6 l4">
            <div class="qt-part-archive-item qt-item-podcast">
                <div class="qt-item-header">
                    <div class="qt-header-top">
                        <ul class="qt-tags">
                            <li><a href="#tag-link"></a></li>
                        </ul>

                    </div>
                    <div class="qt-header-mid qt-vc">
                        <div class="qt-vi">
                            <a href="single-podcast.html" class="qt-text-shadow"><i class="dripicons-media-play qt-text-neg"></i></a>
                        </div>
                    </div>

                    <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/img04.jpg')}}">
                        <img src="{{asset('utilisateur/imagestemplate/imagestemplate/img04.jpg')}}" alt="Featured image" width="690" height="690">
                    </div>
                </div>
                <div class="qt-item-content-s qt-card">
                    <h4 class="qt-ellipsis-2 qt-t">
                        <a href="single-podcast.html">{{$podcast->titre}}</a>
                    </h4>
                </div>
            </div>
        </div>
    @endforeach
@endsection
