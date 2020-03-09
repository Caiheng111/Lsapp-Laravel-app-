@extends('layouts.app')

@section('content')

<h1>Posts</h1>

@if(count($posts)> 0)
    <div class='well'>

      <ul class="list-group">
          @foreach($posts as $post)
              <li class="list-group-item">
              <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Writen on {{$post -> created_at}}</small>
              </li>
          @endforeach
      </ul> 
    </div>

    {{-- 分页功能 --}}
     {{$posts->links()}}

@else
  <h1>No post Found</h1>
@endif
   
@endsection