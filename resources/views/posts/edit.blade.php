@extends('layout.app')

@section('content')
    <h1><center>Edit Post</center></h1>
    <hr>
    <form method="POST" action="{{ action('App\Http\Controllers\PostsController@update', $post->id) }}" class="form-group">
        @csrf
        @method('PUT') {{-- Spoof the HTTP verb --}}
        
        <input type="text" name="title" value="{{ $post->title }}" placeholder="Enter title" class="form-control">
        
        <textarea id="article-ckeditor" name="body" placeholder="Enter body content" class="form-control">
            {{ $post->body }}
        </textarea>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
