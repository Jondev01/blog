@extends('layouts.blog')

@section('main-content')
    <h2>Posts</h2>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Geschrieben am {{$post->created_at}}</small>
            </div>
        @endforeach
    @endif
@endsection