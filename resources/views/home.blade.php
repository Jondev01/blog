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
            @if(!is_null($user->blog))
            <table class="table">
                <tr>
                    <th><a href={{route('blogs.show', $user->blog->id)}}>{{$user->blog->title}}</a></th>
                    <th><a href={{route('blogs.edit', $user->blog->id)}}><button class="btn btn-default">Bearbeiten</button></a></th>
                    <th>{{ Form::open(array('action' => ['BlogsController@destroy', $user->blog->id], 'method' => 'DELETE', 'class' => 'pull-right', 'onsubmit' => 'return youSure(this);')) }}
                            {{ Form::submit('Blog löschen', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </th>
                    <th><a href={{route('posts.create', $user->blog->id)}}><button class="btn btn-primary">Beitrag erstellen</button></a></th>
                </tr>
                <?php $posts = $user->blog->posts()->orderBy('created_at', 'desc')->paginate(10) ?>
                @if(count($posts))
                    @foreach($posts as $post)
                    <tr>
                        <td><a href={{route('posts.show', $post->id)}}>{{$post->title}}</a></td>
                        <td><a href={{route('posts.edit', $post->id)}}><button class="btn btn-default">Bearbeiten</button></a></td>
                        <td>
                            {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'pull-right', 'onsubmit' => 'return youSure(this);')) }}
                            {{ Form::submit('Beitrag löschen', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </td>
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
