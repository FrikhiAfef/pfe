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

                <form role="form" method="post"  enctype="multipart/form-data" action="{{route('podcast.update',$podcasts->id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="form-group"  @if($errors->get('titre')) has-error @endif >
                            <label for="exampleInputEmail1">Nom Emission</label>
                            <input type="text" name="titre" class="form-control" value="{{$podcasts->titre}}" >
                            @if($errors->get('titre'))
                                @foreach($errors->get('titre') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif
                        </div>

                        <div class="form-group" @if($errors->get('image')) has-error @endif >
                            <label for="exampleInputEmail1">Image</label>
                            <input name="image" type="file" value="{{$podcasts->image}}" >
                            @if($errors->get('image'))
                                @foreach($errors->get('image') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif

                        </div>

                        <div class="form-group" @if($errors->get('audio')) has-error @endif >
                            <label for="exampleInputEmail1">Audio</label>
                            <input name="audio" type="file" value="{{$podcasts->audio}}" >
                            @if($errors->get('audio'))
                                @foreach($errors->get('audio') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif

                        </div>

                        <div class="form-group" @if($errors->get('video')) has-error @endif >
                            <label for="exampleInputEmail1">Video</label>
                            <input name="video" type="file" value="{{$podcasts->video}}" >
                            @if($errors->get('video'))
                                @foreach($errors->get('image') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif

                        </div>


                        <div class="form-group" @if($errors->get('description')) has-error @endif>
                            <label>Description</label>
                            <textarea class="form-control"  name="description" rows="10">
                                        {{$podcasts->description}}

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
                        <button type="submit" class="form-control btn btn-danger">Modifier</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
        </section>
    </div>


@endsection