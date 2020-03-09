@extends('layouts.app')

@section('content')
 <h1>create post</h1>

 {!! Form::open(['action'=> "PostsController@store", 'method'=> 'POST']) !!}

 <div class="form-group">
   {{Form::label('title', 'Title')}}
   {{Form::text('title', '', ['class' => 'form-control', 'placaholder'=>'Pleaase Input the title'])}}
 </div>
 <div class="form-group">
   {{Form::label('body', 'Body')}}
   {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placaholder'=>'Pleaase Input the body'])}}
 </div>

    {{Form::submit('Submit' ,['class'=> 'btn btn-primary'])}}


 
{!! Form::close() !!}

   
@endsection