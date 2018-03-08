
@extends('layouts.app')

@section('content')
        <br>
        <section class="jumbotron text-center">
        <div class="container">
          <img src="https://www.codebee.co.th/labs/wp-content/uploads/2016/08/%E0%B8%AA%E0%B8%AD%E0%B8%99-laravel-framework.png" width="50%" height="50%">
          <h1 class="jumbotron-heading">{{$title}}</h1>
          <p class="lead text-muted">This is the tainning Laravel and lerning for improve programing skills much better!!</p>
          <p>
            <a  class="btn btn-primary my-2">Login</a>
            <a  class="btn btn-secondary my-2">Register</a>
          </p>
        </div>
      </section>
@endsection
