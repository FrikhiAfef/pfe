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
            <!-- formulaire de creation de nouveau emission -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nouvelle Programmes </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  action="{{route('programme.store')}}">
                            {{csrf_field()}}

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomE')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom Programme</label>
                                    <input type="text" name="nomE" class="form-control"  placeholder="Enter le nom de programme">
                                    @if($errors->get('nomE'))
                                        @foreach($errors->get('nomE') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group"  @if($errors->get('nomAnim')) has-error @endif>
                                    <label for="exampleInputPassword1">Nom Animateur</label>
                                    <input type="text" name="nomAnim" class="form-control"  placeholder="Enter le nom de l'animateur">
                                    @if($errors->get('nomAnim'))
                                        @foreach($errors->get('nomAnim') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('prenomAnim')) has-error @endif>
                                    <label for="prenomAnim">Prenom Animateur</label>
                                    <input type="text" name="prenomAnim" class="form-control"  placeholder="Enter le prenom de l'animateur">
                                    @if($errors->get('prenomAnim'))
                                        @foreach($errors->get('prenomAnim') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('description')) has-error @endif>
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" rows="3" placeholder="Enter ...">

                                    </textarea>
                                    @if($errors->get('description'))
                                        @foreach($errors->get('description') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>


                                <div class="form-group" @if($errors->get('image')) has-error @endif>
                                    <label for="image">Image</label>
                                    <input name="image" type="file" >
                                    @if($errors->get('image'))
                                        @foreach($errors->get('image') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif

                                </div>

                                <div class="form-group" @if($errors->get('heure')) has-error @endif>
                                    <label for="heure">Heure</label>
                                    <input type="datetime-local" name="heure" class="form-control"  placeholder=" DE 12H00 À 14H00">
                                    @if($errors->get('heure'))
                                        @foreach($errors->get('heure') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('jours')) has-error @endif>
                                    <label for="jours">Jours</label>
                                    <input type="text" name="jours" class="form-control"  placeholder="DE LUNDI À VENDREDI ">
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
                                <button type="submit" class="btn btn-primary">Enregistrer</button>

                                <button type="reset" class="btn btn-primary" value="Anuler">Annuler</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection