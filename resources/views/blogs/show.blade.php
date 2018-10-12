@extends('layouts.app')

@section('content')
    <header>
        <h1>{{$blog->title}}</h1>
        <p>Welcome to the blog of <span class="black-box">{{$blog->author}}</span></p>
    </header>
    <div class="container">
        @include('inc.messages')
        <div class="my-container">
            <article id="my-info">
                <img src="/storage/blog_images/{{$blog->image}}"/>
                <div>
                <h3>{{$blog->author}}</h3>
                    <p>{{$blog->description}}</p>
                </div>
            </article>	
            @include('inc.posts', ['posts' => $blog->posts()->orderBy('created_at', 'desc')->paginate(2)])
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
        </div>
    </div>
@endsection('content')