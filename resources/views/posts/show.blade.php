@extends('layout.app')
    @section('content')
        <a href="/posts" class="btn btn-primary">See All</a>
        <h1>{{$post->title}}</h1>
        <div>
            {!!$post->body!!}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

        <form action="{{ action('App\Http\Controllers\PostsController@destroy', $post->id) }}" method="POST" class="float-end">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    @endsection