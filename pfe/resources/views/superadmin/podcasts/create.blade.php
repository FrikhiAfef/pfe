@extends('superadmin.layouts.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">WEB RADIO</li>
                <li class="active">PODCASTS</li>
            </ol>

    <!-- formulaire de creation de nouveau emission -->
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nouvelle Enregistrement </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post"  action="{{route('podcast.store')}}">
                    {{csrf_field()}}

                    <div class="box-body">
                        <div class="form-group"  @if($errors->get('titre')) has-error @endif >
                            <label for="exampleInputEmail1">Titre</label>
                            <input type="text" name="titre" class="form-control"  placeholder="titre">
                            @if($errors->get('titre'))
                                @foreach($errors->get('titre') as $message)
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

                        <div class="form-group" @if($errors->get('audio')) has-error @endif>
                            <label for="audio">Audio</label>
                            <input name="audio" type="file" >
                            @if($errors->get('audio'))
                                @foreach($errors->get('audio') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif

                        </div>

                        <div class="form-group" @if($errors->get('video')) has-error @endif>
                            <label for="video">Video</label>
                            <input name="video" type="file" >
                            @if($errors->get('video'))
                                @foreach($errors->get('video') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif

                        </div>


                        <div class="form-group" @if($errors->get('description')) has-error @endif>
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="10" placeholder="Enter ...">

                                    </textarea>
                            @if($errors->get('description'))
                                @foreach($errors->get('description') as $message)
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