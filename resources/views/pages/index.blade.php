

@extends('layouts.app')
@section('content')

  <div class="jumbotron">
    <h1 class="display-4">Hello, {{$title}}</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
  
    <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
  </div>


@endsection


