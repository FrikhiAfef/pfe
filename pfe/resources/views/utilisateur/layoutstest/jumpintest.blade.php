@extends('utilisateur/apptest')
@section('contenu')

    <div id="maincontent" class="qt-main">


        <div class="qt-container qt-spacer-l">

                    @foreach( $jumps as $jump )
                    <div class="col s12 m12 l8">
                        <div class="qt-the-content">

                            <h1>{{$jump->titre}}</h1>
                            <br>
                            <dd><p>{{$jump->description}}</p></dd>
                            <br>

                        </div>

                        <hr class="qt-spacer-l">
                    </div>
                    @endforeach


        </div>

    </div>



@endsection