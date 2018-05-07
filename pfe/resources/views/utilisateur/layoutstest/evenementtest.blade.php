@extends('utilisateur.apptest')
@section('contenu')



        <div class="qt-container">

            <div class="qt-related-list row">
                @foreach($evenements as $evenement)
                <div class="col s12 m4">
                    <div class="qt-part-archive-item qt-item-chart">
                        <div class="qt-item-header">
                            <div class="qt-header-top">
                                <ul class="qt-tags">
                                    <li><a href="#">{{$evenement->date}}</a></li>
                                </ul>
                                <div class="qt-feedback">

                                </div>
                            </div>
                            <div class="qt-header-mid qt-vc">
                                <div class="qt-vi">
                                    <h3 class="qt-title qt-ellipsis qt-t">
                                        <a href="#" class="qt-text-shadow">
                                            {{$evenement->nomEven}}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            <div class="qt-header-bottom">
                                <a href="#" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                            </div>
                            <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/event/1.png')}}">
                                <img src="{{asset('utilisateur/imagestemplate/squared-690-690/unsplash-02.jpg')}}" alt="Featured image" width="690" height="690">
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>


@endsection
