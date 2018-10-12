@extends('layouts.app')

@section('content')
<div class="container">
    <a href={{url()->previous()}}><button class="btn btn-default">Zurück</button></a>
    <h1>{{$post->title}}</h1>
    <small>Geschrieben am {{ $post->created_at }}</small>
    <img src="/storage/post_images/{{$post->image}}" style="width:100%">
    <p>{!! $post->body !!}</p>
    @if(Auth::check() && Auth::id() == $post->user->id)
        {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'pull-right', 'onsubmit' => 'return youSure(this);')) }}
            {{ Form::submit('Beitrag löschen', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
        <button class="btn btn-link edit"><a href="{{route('posts.edit', $post->id)}}">Bearbeiten</a></button>
    @endif
    @if(count($post->comments)>0)
        <div class="comments">
            @foreach($post->comments as $comment)
                <div class="comment">
                    {{$comment->name}} schrieb am {{$comment->created_at}} 
                    <br/>
                    <p>{{$comment->body}}</p>
                    @if(Auth::check() && Auth::id() == $post->user->id)
                        {{ Form::open(array('action' => ['CommentsController@destroy', $comment->id], 'method' => 'DELETE', 'class' => 'pull-right', 'onsubmit' => 'return youSure(this);')) }}
                            {{ Form::submit('Kommentar löschen', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    @endif
                </div>
            @endforeach
        </div>
    @else 
        <div>
            Dieser Beitrag hat keine Kommentare.
        </div>
    @endif

    @include('comments.create', ['post_id' => $post->id])
</div>
@endsection