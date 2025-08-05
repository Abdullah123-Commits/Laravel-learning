@extends('layout.app')
    @section('content')
        <h1><center>Create a Post</center></h1>
        <hr>
        <form method="POST" action="{{ action('App\Http\Controllers\PostsController@store') }}" class="form-group">
            @csrf
            <input type="text" name="title" placeholder="Enter title" class="form-control">
            <textarea id="article-ckeditor" name="body" placeholder="Enter body content" class="form-control"></textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection