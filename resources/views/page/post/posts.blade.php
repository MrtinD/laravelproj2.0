@extends('layouts.navapp') 
@section('content') @foreach($posts as $post)
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">{{$post->title}}</h1>
      <small>{{$post->user->name}}</small>
      <p>{{$post->body}}</p>
      <p><a class="btn btn-primary btn-lg" href="/posts/single/{{$post->id}}" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  </div>
  <!-- /container -->

</main>
@endforeach
@endsection