@extends('layouts.app');

@section('content');
    <h1>Posts</h1>
    <li align="right"><a href="/posts/create"><img src="https://png.icons8.com/metro/1600/plus.png" width="30" height="30">Create Blog</a></li>  
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
              <h3><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h3>
              <small>Written on {{$post->created_at}}</small>
            </div>

        @endforeach
        {{$posts->links()}}
        {{-- ทำเป็นหน้า --}}
    @else
        <p>No posts found!!!</p>

    @endif
@endsection
