@extends('utilisateur.apptest')
@section('contenu')
    <div id="maincontent" class="qt-main">



        <!-- ======================= CONTENT SECTION ======================= -->
        <div class="qt-container qt-vertical-padding-l qt-archive-team">
            <div class="row">
               @foreach($equipes as $equipe)

                    <div class="col s12 m4 l3">
                        <!-- MEMBER ========================= -->
                        <div class="qt-part-archive-item qt-item-member">
                            <div class="qt-item-header">
                                <div class="qt-header-top">
                                    <ul class="qt-tags">
                                        <li><a href="#tag-link">{{$equipe->poste}} </a></li>
                                    </ul>
                                </div>
                                <div class="qt-header-mid qt-vc">
                                    <div class="qt-vi">
                                        <h4 class="qt-ellipsis qt-title">
                                            <a href="#" class="qt-text-shadow">{{$equipe->nom}} {{$equipe->prenom}}</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="qt-header-bottom">
                                    <a href="single-member.php" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-user"></i></a>
                                </div>
                                <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/medium-690-302/unsplash-02.jpg')}}">
                                    <img src="{{asset('utilisateur/imagestemplate/medium-690-302/unsplash-02.jpg')}}" alt="Featured image" width="690" height="690">
                                </div>
                            </div>

                        </div>
                        <!-- MEMBER END ========================= -->
                    </div>
                   @endforeach


            </div>
        </div>


    </div>
    @endsection