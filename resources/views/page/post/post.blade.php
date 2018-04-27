@extends('layouts.navapp') 
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{$post->title}}</h1>
            <small>{{$post->user->name}}</small>
            <p>{{$post->body}}</p>
            @if(count($post->comments))
                @foreach($post->comments as $post->comment)
                    <hr>
                    <p>{{$post->comment->content}}</p>
                    <small>By : {{$post->comment->user->name}}</small>
                @endforeach
            @endif
            <hr>
            <p><a class="btn btn-primary btn-lg" href="/" role="button">Back &raquo;</a></p>
            @if(Auth::user())
                @if(Auth::user()->id==$post->user->id)
                    <a href="/edit/{{$post->id}}"><p>Edin post</p></a>
                    <a href="/delete/{{$post->id}}"><p>Delete post</p></a>
                @endif
            <form action="/comment" method="POST" class="form-group">
            @csrf
            <textarea class="form-control" name="comment_body" id="" cols="45" rows="5"></textarea>
            <input type="hidden" name="user_id" id="" value="{{Auth::user()->id}}">
            <input type="hidden" name="post_id" id="" value="{{$post->id}}">
                <div>
                <button class="btn btn-primary btn-lg" type="submit">Comment</button>
                </div>
            </form>
            @endif
        </div>
    </div>
@endsection