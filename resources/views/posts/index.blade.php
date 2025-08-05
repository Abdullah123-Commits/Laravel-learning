@extends('layout.app')
    @section('content')
        <h1><center>Posts</center></h1>
        <hr>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No Posts Found</p>
        @endif

    @endsection