@extends('layouts.navapp') 
@section('content') 

@foreach($userposts as $userpost)
<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">{{$userpost->title}}</h1>
                <small>{{$post->user->name}}</small>
                <p>{{$userpost->body}}</p>
                <p><a class="btn btn-primary btn-lg" href="/posts/single/{{$userpost->id}}" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
    <!-- /container -->
</main>
@endforeach
@endsection