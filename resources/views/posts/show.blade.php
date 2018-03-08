@extends('layouts.app');

@section('content');
    <h1>{{$post->title}}</h1>

    {!!Form::open(['action' => ['PostController@destroy', $post->id],
      'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close() !!}

    <hr>
    <div>
      {!!$post->body!!}
      {{-- ถ้าใช้{{}}ครอบtext จะทำให้มองข้าม html --}}
    </div>

      <small>Written on {{$post->created_at}}</small><br>
      <hr>      
      <a href="/posts/{{$post->id}}/edit" class="btn btn-info"> Edit </a>
      <a href="/posts" class="btn btn-default" role="button"> Back </a>

@endsection
