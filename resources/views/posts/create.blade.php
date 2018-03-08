@extends('layouts.app')

@section('content')
  <h1>Create Blog</h1>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Content')}}
            {{Form::textarea('body', '', ['id' =>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Type here'])}}
        </div>
        {{Form::submit('Create', ['class' => 'btn btn-info'])}}
        <a href="/posts" class="btn btn-default" > Cancel </a>
    {!! Form::close() !!}


@endsection
