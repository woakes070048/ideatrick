@extends('themes.blog')

@section('content')
    @foreach($blogposts as $blogpost)
        <article class="uk-article">
            <h2 class="uk-article-title">
                <a href="{{ $blogpost->id }}">{{ $blogpost->title }}</a>
            </h2>
            <p class="uk-article-meta"> Writen on {{ $blogpost->published_at }}. Posted in <a href="#"> Blog</a></p>
            <p><img src="data:image/svg+xml;base64,{{$blogpost->featured_image}}" alt="" height="300" width="900"</img></p>
            <p>{{ $blogpost->content }}</p>
            <p>
                <a class="uk-button uk-button-primary" href="{{$blogpost->id}}">more</a>
            </p>
        </article>
    @endforeach

@endsection

@section('footer')
<footer> Test footer
</footer>
@endsection
