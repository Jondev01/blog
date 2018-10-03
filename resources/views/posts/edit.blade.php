@extends('layouts.blog')

@section('main-content')
<a href="{{route('posts.show', $post->id)}}"><button class="btn btn-default">Zurück</button></a>
    <h1>Beitrag bearbeiten</h1>
    {{ Form::open(array('action' => ['PostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}
        <div class="form-group">
            {{ Form::label('title', 'Titel') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titel']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Text') }}
            {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Text']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Text') }}
            {{ Form::file('image') }}
        </div>
        {{ Form::submit('Speichern', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
@endsection