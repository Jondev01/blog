@extends('posts.show')

@section('comments')
    @foreach($comments as $comment)
        <small>
            {{$comment->name}} schrieb am {{$comment->created_at}}
        </small>
        <div>
            {{$comment->body}}
        </div>
    @endforeach
@endsection