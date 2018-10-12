@extends('layouts.app')

@section('content')
<div class="container">
    @if(count($blogs))
        <table class="table">
            <tr>
                <th></th>
                <th>Titel</th>
                <th>Autor</th>
                <th>Beiträge</th>
            </tr>
        @foreach($blogs as $blog)
            <tr>
                    <td><img src="/storage/blog_images/{{$blog->image}}" style="width:100px"/></td>
                    <td><a href={{route('blogs.show', $blog->id)}}><strong>{{$blog->title}}</strong></a></td>
                    <td>{{$blog->author}}</td>
                    <td>{{count($blog->posts)}}</td>
            </tr>
        @endforeach
        </table>
    @endif
</div>
@endsection