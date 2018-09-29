@extends('layouts.blog')

@section('main-content')
    <h2>Posts</h2>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card p-3">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Geschrieben am {{$post->created_at}}</small>
            <button class="btn btn-link"><a href="{{route('posts.edit', $post->id)}}">Bearbeiten</a></button>
            </div>
        @endforeach
        {{$posts->links()}}
    @endif
@endsection