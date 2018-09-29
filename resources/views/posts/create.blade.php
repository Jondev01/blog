@extends('layouts.blog')

@section('main-content')
    <h2>Beitrag erstellen</h2>
    {!! Form::open(array('action' => 'PostsController@store')) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titel') !!}
            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titel']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Text') !!}
            {!! Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Text']) !!}
        </div>
        {!! Form::submit('Beitrag erstellen', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection