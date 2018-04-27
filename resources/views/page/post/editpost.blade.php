@extends('layouts.navapp')
@section('content')

<div class="jumbotron">
        <div class="container">
            <form action="/edit/{{$editpost->first()->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                <input type="title" class="form-control" id="exampleInputEmail1" placeholder="Post Title" name="asdtitle" value="{{$editpost->first()->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea name="asdbody" id="body" class="form-control" placeholder="Enter Content">{{$editpost->first()->body}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>
        </div>
    </div>
@endsection