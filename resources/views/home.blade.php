@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> -->
            @if($user->blog()->exists())
            <table class="table">
                <tr>
                    <th><a href={{route('blogs.show', $user->blog->id)}}>{{$user->blog->title}}</a></th>
                    <th><a href={{route('blogs.edit', $user->blog->id)}}><button class="btn btn-default">Bearbeiten</button></a></th>
                    <th>{{ Form::open(array('action' => ['BlogsController@destroy', $user->blog->id], 'method' => 'DELETE', 'class' => 'pull-right')) }}
                            {{ Form::submit('Blog löschen', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </th>
                </tr>
                <?php $posts = $user->blog->posts()->orderBy('created_at', 'desc')->paginate(10) ?>
                @if(count($posts))
                    @foreach($posts as $post)
                    <tr>
                        <td><a href={{route('posts.show', $post->id)}}>{{$post->title}}</a></td>
                        <td><a href={{route('posts.edit', $post->id)}}><button class="btn btn-default">Bearbeiten</button></a></td>
                        <td>{{$post->title}}</td>
                    </tr>
                    @endforeach
                @endif
            </table>
            {{$posts->links()}}
            @else @include('blogs.create')
            @endif
            
        </div>
    </div>
</div>
@endsection
