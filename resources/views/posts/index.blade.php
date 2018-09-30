@extends('layouts.blog')

@section('main-content')
    <div class="my-container">
        @if(count($posts)>0)
            @foreach($posts as $post)
                <article class="post">
                    <img src="a.jpg">
                    <div>
                        <h2>{{$post->title}}</h2>
                        <small> Geschrieben am {{$post->created_at}}</small>
                        <p>{!! $post->body !!}</p>
                        <a href="{{route('posts.show', $post->id)}}"><button>Read More<span>&raquo</span></button></a>
                        <span class="comments">Comments <span class="black-box">0</span></span>
                    <div>
                </article>
            @endforeach
            {{$posts->links()}}
        @endif
        <article id="my-info">
                <img src="person.jpeg"/>
                <div>
                    <h3>John Doe</h3>
                    <p>This is real, this is me. I'm exactly where I'm supposed to be. I'm gonna let the light shine on me.</p>
                </div>
        </article>	
        <article id="popular">
            <h4 class="grey-box">Popular posts</h4>
            <ul>
                <li>
                    <img src="pop1.jpeg"/> 
                    <span class="post-title">Title one</span><br/>
                    <span>Description one</span> <br/>
                </li>

                <li>
                    <img src="pop2.jpg"/><span class="post-title">Title two</span><br/>
                    <span>Description two</span><br/>
                </li>

                <li>
                    <img src="pop3.jpeg"/><span class="post-title">Title three</span><br/>
                    <span>Description three</span><br/>
                </li>

                <li id="last-post">
                    <img src="pop4.jpeg"/><span class="post-title">Title four</span><br/>
                    <span>Description four</span><br/>
                </li>
            </ul>
        </article>
@endsection