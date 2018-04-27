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
                @if(count($userpost->comments))
                <p>Comment section:</p>
                    @foreach($userpost->comments as $userpost->comment)
                        <hr>
                        <p>{{$userpost->comment->content}}</p>
                        <small>By : {{$userpost->comment->user->name}}</small>
                    @endforeach
                @endif
                <hr>
                <p><a class="btn btn-primary btn-lg" href="/posts/single/{{$userpost->id}}" role="button">Learn more &raquo;</a></p>
                @if(Auth::user())
                    @if(Auth::user()->id==$userpost->user->id)
                        <a href="/edit/{{$userpost->id}}"><p>Edin post</p></a>
                    @endif
                    @if(Auth::user()->id==$userpost->user->id)
                        <a href="/delete/{{$userpost->id}}"><p>Delete post</p></a>
                    @endif
                @endif
                @if(Auth::user())
                <form action="/comment" method="POST" class="form-group">
                  @csrf
                  <textarea class="form-control" name="comment_body" id="" cols="45" rows="5"></textarea>
                  <input type="hidden" name="user_id" id="" value="{{Auth::user()->id}}">
                  <input type="hidden" name="post_id" id="" value="{{$userpost->id}}">
                  <div>
                <button class="btn btn-primary btn-lg" type="submit">Comment</button>
              </div>
              </form>
              @endif  
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