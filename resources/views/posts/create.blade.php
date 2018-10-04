@extends('layouts.blog')

@section('main-content')
    <h1>Beitrag erstellen</h1>
    {{ Form::open(array('action' => 'PostsController@store', 'enctype' => 'multipart/form-data')) }}
        <div class="form-group">
            {{ Form::label('title', 'Titel') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titel']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Text') }}
            {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Text']) }}
        </div>
        <div class="form-group">
            {{ Form::file('image') }}
        </div>
        {{  Form::submit('Beitrag erstellen', ['class' => 'btn btn-primary']) }}
    {{  Form::close() }}
@endsection