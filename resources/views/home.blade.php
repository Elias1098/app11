@extends('app')
@section('content')
<div class="container">
    <h1>This is my home page</h1>
    @if (session()->has('user'))
    <p>{{ Session::get('user')['id'] }}</p>
    <p>{{ Session::get('user')['name'] }}</p>
    <p>{{ Session::get('user')['email'] }}</p>
    <hr>
    <b>Posts</b>
    <hr>
    @forelse ($posts as $post)
        <p>Title :{{ $post->title }} By <i>{{ $post->user->name }}-->The invers relationship</i></p>
        <p>Body :{{ $post->body }}</p>
<hr>
    @empty
        <b>No post</b>
    @endforelse
    @endif
</div>

@endsection
