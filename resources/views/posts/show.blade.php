@extends('layouts.blog')
@section('main-content')
    <a href="{{route('posts.index')}}"><button class="btn btn-default">Zurück zur Übersicht</button></a>
    <h1>{{$post->title}}</h1>
    <small>Geschrieben am {{$post->created_at}}</small>
    <p>{{$post->body}}</p>
    {{ Form::open(array('action' => ['PostsController@update', $post->id], 'method' => 'DELETE', 'class' => 'pull-right')) }}
        {{ Form::submit('Beitrag löschen', ['class' => 'btn btn-danger']) }}
    {{ Form::close() }}
    <button class="btn btn-link edit"><a href="{{route('posts.edit', $post->id)}}">Bearbeiten</a></button>
    @if(count($post->comments)>0)
        <div class="comments">
            @foreach($post->comments as $comment)
                <div class="comment">
                    {{$comment->name}} schrieb am {{$comment->created_at}} 
                    <br/>
                    <p>{{$comment->body}}</p>
                </div>
            @endforeach
        </div>
    @else 
        <div>
            Dieser Beitrag hat keine Kommentare.
        </div>
    @endif

    @include('comments.create', ['post_id' => $post->id])
    
@endsection