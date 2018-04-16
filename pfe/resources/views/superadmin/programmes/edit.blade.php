@extends('superadmin.layouts.app')

@section('main-content')
    <!-- contenu de l'entete de page -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">WEB RADIO</li>
                <li class="active">PROGRAMMES</li>
            </ol>
            <br>
            <br>

            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nouveau Programme </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  enctype="multipart/form-data" action="{{route('programme.update',$programme->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomE')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom Programme</label>
                                    <input type="text" name="nomE" class="form-control" value="{{$programme->nomE}}" >
                                    @if($errors->get('nomE'))
                                        @foreach($errors->get('nomE') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="box-body">
                                    <div class="form-group"  @if($errors->get('nomAnim')) has-error @endif >
                                        <label for="exampleInputEmail1">Nom Animateur</label>
                                        <input type="text" name="nomAnim" class="form-control" value="{{$programme->nomAnim}}" >
                                        @if($errors->get('nomAnim'))
                                            @foreach($errors->get('nomAnim') as $message)
                                                <li>{{$message}}</li>
                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="box-body">
                                        <div class="form-group"  @if($errors->get('prenomAnim')) has-error @endif >
                                            <label for="exampleInputEmail1">Prenom Animateur</label>
                                            <input type="text" name="prenomAnim" class="form-control" value="{{$programme->prenomAnim}}" >
                                            @if($errors->get('prenomAnim'))
                                                @foreach($errors->get('prenomAnim') as $message)
                                                    <li>{{$message}}</li>
                                                @endforeach
                                            @endif
                                        </div>


                                <div class="form-group" @if($errors->get('description')) has-error @endif>
                                    <label>Description</label>
                                    <textarea class="form-control"  name="description" rows="3">
                                        {{$programme->description}}

                                    </textarea>
                                    @if($errors->get('description'))
                                        @foreach($errors->get('description') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>
                                        <div class="box-body">
                                            <div class="form-group"  @if($errors->get('image')) has-error @endif >
                                                <label for="exampleInputEmail1">Image</label>
                                                <input type="text" name="image" class="form-control" value="{{$programme->image}}" >
                                                @if($errors->get('image'))
                                                    @foreach($errors->get('image') as $message)
                                                        <li>{{$message}}</li>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="box-body">
                                                <div class="form-group"  @if($errors->get('heure')) has-error @endif >
                                                    <label for="exampleInputEmail1">Image</label>
                                                    <input type="datetime-local" name="heure" class="form-control" value="{{$programme->heure}}" >
                                                    @if($errors->get('heure'))
                                                        @foreach($errors->get('heure') as $message)
                                                            <li>{{$message}}</li>
                                                        @endforeach
                                                    @endif
                                                </div>

                                                <div class="box-body">
                                                    <div class="form-group"  @if($errors->get('jours')) has-error @endif >
                                                        <label for="exampleInputEmail1">Jours</label>
                                                        <input type="text" name="jours" class="form-control" value="{{$programme->jours}}" >
                                                        @if($errors->get('jours'))
                                                            @foreach($errors->get('jours') as $message)
                                                                <li>{{$message}}</li>
                                                            @endforeach
                                                        @endif
                                                    </div>



                                                    <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> valider
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="form-control btn btn-danger">Modifier</button>
                            </div>

                                            </div></div></div></div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection