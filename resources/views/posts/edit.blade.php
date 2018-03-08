@extends('layouts.app')

@section('content')
  <h1>Edit</h1>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Content')}}
            {{Form::textarea('body', $post->body, ['id' =>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Type here'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Create', ['class' => 'btn btn-info'])}}
        <a href="/posts/{{$post->id}}" class="btn btn-default" > Cancel </a>
    {!! Form::close() !!}


@endsection
