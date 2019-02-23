@if(count($posts)>0)
            @foreach($posts as $post)
                <article class="post">
                <img src="/storage/post_images/{{$post->image}}" style="width:100%">
                    <div>
                        <h2>{{$post->title}}</h2>
                        <small> Geschrieben am {{$post->created_at}}</small>
                        <p>{!! $post->body !!}</p>
                        <a class="more" href="{{route('posts.show', $post->id)}}"><button>Mehr<span>&raquo</span></button></a>
                    <div class="comments">Kommentare <span class="black-box">{{count($post->comments)}}</span></div>
                    </div>
                </article>
            @endforeach
    {{$posts->links()}}
@else 
    <article class="post">
        <img src="/storage/post_images/default.jpg" style="width:100%">
            <div>
                <p>Erstelle jetzt einen Beitrag</p>
                <a class="more" href="{{route('posts.create')}}"><button>BEITRAG ERSTELLEN</button></a>
            </div>
    </article>
@endif