<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.shareicon.net/download/2015/10/07/114032_m-maaii.ico">


    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/jumbotron/jumbotron.css" rel="stylesheet"> {{--
    <link href="https://getbootstrap.com/docs/4.1/examples/floating-labels/floating-labels.css" rel="stylesheet"> --}}
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        @if(Auth::user())
        <a class="nav-link" href="\">{{Auth::user()->name}}</a> @else
        <a class="navbar-brand" href="\">MyProject</a> @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
            aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                @if(Auth::user())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">User Options</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="/posts/{{Auth::user()->id}}">My Posts</a>
                        <a class="dropdown-item" href="/posts/create">Create Post</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
                @endif {{--
                <li class="nav-item active">
                    <a class="nav-link" href="/posts">Posts <span class="sr-only">(current)</span></a>
                </li> --}}
            </ul>
            @if(!Auth::user()) 
            <div class="form-inline my-2 my-lg-0">
                <a class="navbar-brand" href="\login">Login</a>
                <a class="navbar-brand" href="\register">Register</a>
            </div>
            @endif
        </div>
    </nav>

    @yield('content')

    @include('inc.postscript')
    <footer class="container">
        <p>&copy; Company 2017-2018</p>
    </footer>
</body>

</html>