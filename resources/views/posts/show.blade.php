@extends('layouts.blog')
@section('main-content')
    <h1>{{$post->title}}</h1>
    <small>Geschrieben am {{$post->created_at}}</small>
    <p>{!! $post->body !!}</p>
    {!! Form::open(array('action' => ['PostsController@update', $post->id], 'method' => 'DELETE', 'class' => 'pull-right')) !!}
        {!! Form::submit('Beitrag löschen', ['class' => 'btn btn-danger']) !!}
    {!! Form::close()!!}
    
@endsection