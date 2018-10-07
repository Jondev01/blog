@if(count($posts)>0)
            @foreach($posts as $post)
                <article class="post">
                <img src="/storage/post_images/{{$post->image}}" style="width:100%">
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