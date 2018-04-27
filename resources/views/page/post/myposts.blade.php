@extends('layouts.navapp') 
@section('content') 



@if(count($userposts))
@foreach($userposts as $userpost)
<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">{{$userpost->title}}</h1>
                <small>{{$userpost->user->name}}</small>
                <p>{{$userpost->body}}</p>
                <p>{{$userpost->comments}}</p>
                <p><a class="btn btn-primary btn-lg" href="/posts/single/{{$userpost->id}}" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
    <!-- /container -->
</main>
@endforeach
@else
    <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Hello, {{Auth::user()->name}}</h1>
          <p>Right now you dont really have any posts, so check the menu for more options.</p>
          <p><a class="btn btn-primary btn-lg" href="/posts/create" role="button">Create your first post! &raquo;</a></p>
        </div>
    </div>
@endif
@endsection