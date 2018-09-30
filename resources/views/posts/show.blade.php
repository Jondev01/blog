@extends('layouts.blog')
@section('main-content')
    <a href="{{route('posts.index')}}"><button class="btn btn-default">Zurück zur Übersicht</button></a>
    <h1>{{$post->title}}</h1>
    <small>Geschrieben am {{$post->created_at}}</small>
    <p>{!! $post->body !!}</p>
    {!! Form::open(array('action' => ['PostsController@update', $post->id], 'method' => 'DELETE', 'class' => 'pull-right')) !!}
        {!! Form::submit('Beitrag löschen', ['class' => 'btn btn-danger']) !!}
    {!! Form::close()!!}
    <button class="btn btn-link edit"><a href="{{route('posts.edit', $post->id)}}">Bearbeiten</a></button>
    
@endsection