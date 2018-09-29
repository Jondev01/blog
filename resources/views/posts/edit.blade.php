@extends('layouts.blog')

@section('main-content')
    <h1>Beitrag bearbeiten</h1>
    {!! Form::open(array('action' => ['PostsController@update', $post->id], 'method' => 'PUT')) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titel') !!}
            {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titel']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Text') !!}
            {!! Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Text']) !!}
        </div>
        {!! Form::submit('Speichern', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection