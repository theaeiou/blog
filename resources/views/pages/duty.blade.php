@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>

        @if(count($duties)>0)
          <ul class="list-group">
          @foreach ($duties as $duties => $details)
                <li class="list-group-item list-group-item-action flex-column align-items-start ">
                  <div class="d-flex w-100 justify-content-between">
                    <h3 class="mb-1">{{$duties}}</h3>
                  </div>
                  <p class="mb-1">{{$details}}</p></li>

          @endforeach
          </ul>
        @endif

@endsection
