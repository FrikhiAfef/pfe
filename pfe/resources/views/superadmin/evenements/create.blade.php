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
                <li class="active">EVENEMENT</li>
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
                            <h3 class="box-title">Nouvel Evenement</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  action="{{route('evenement.store')}}">
                            {{csrf_field()}}

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomEven')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom Evenement</label>
                                    <input type="text" name="nomEven" class="form-control"  placeholder="Enter le nom de l'evenement">
                                    @if($errors->get('nomEven'))
                                        @foreach($errors->get('nomEven') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group"  @if($errors->get('description')) has-error @endif>
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea  name="description" class="form-control" rows="3"  placeholder="Entrer la desription">
                                    </textarea>
                                    @if($errors->get('description'))
                                        @foreach($errors->get('description') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('lieu')) has-error @endif>
                                    <label for="prenomAnim">Lieu d'Evenement</label>
                                    <input type="text" name="lieu" class="form-control"  placeholder="Enter le lieu d'evenement">
                                    @if($errors->get('lieu'))
                                        @foreach($errors->get('lieu') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('nbParticipant')) has-error @endif>
                                    <label for="date">Nombre Participants</label>
                                    <input type="text" name="nbParticipant" class="form-control"  placeholder=" le nombre des participants est ..">
                                    @if($errors->get('nbParticipant'))
                                        @foreach($errors->get('nbParticipant') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('date')) has-error @endif>
                                    <label>DATE</label>
                                    <input type="datetime-local" class="form-control" name="date"  placeholder="DE LUNDI À VENDREDI DE 12H00 À 14H00">


                                    @if($errors->get('date'))
                                        @foreach($errors->get('date') as $message)
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
