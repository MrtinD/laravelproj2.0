@extends('layouts.navapp') 
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <p><a class="btn btn-primary btn-lg" href="/" role="button">Back &raquo;</a></p>
        </div>
    </div>
@endsection