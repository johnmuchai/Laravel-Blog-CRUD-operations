<!-- Default Bootstrap Navbar -->
    <nav class="navbar navbar-default" style="background-color:#99CCFF; margin-top:10px; height:80px;">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? "active" : ""}}"><a href="/"><i class="fa fa-home"  style="font-size:30px; color: green; margin-right:5px;"></i>Home</a></li>
            <li class="{{Request::is('/blog') ? "active" : ""}}"><a href="/blog"><i class="fa fa-pencil-square-o"  style="font-size:30px; color: green; margin-right:5px;"></i>Blog</a></li>
            <li class="{{Request::is('/about') ? "active" : ""}}"><a href="/about"><i class="fa fa-newspaper-o"  style="font-size:30px; color: green; margin-right:5px;"></i>About</a></li>
            <li class="{{Request::is('/contact') ? "active" : ""}}"><a href="/contact"><i class="fa fa-phone-square"  style="font-size:30px; color: green; margin-right:5px;"></i>Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          @if (auth::check())
            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Authenticated User: {{ Auth::user()->name}}<span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color:#B0E0E6;">
                <li><a href="{{route('posts.index')}}"><i class="fa fa-pencil"  style="font-size:30px; color: green; margin-right:5px;"></i>Posts</a></li>
                
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('categories.index')}}"><i class="fa fa-tree"  style="font-size:30px; color: green; margin-right:5px;"></i>Categories</a></li>
                <li><a href="{{ route('tags.index')}}"><i class="fa fa-tags"  style="font-size:30px; color: green; margin-right:5px;"></i>Tags</a></li>
                <li><a href="{{ route('logout')}}"><i class="fa fa-user"  style="font-size:30px; color: green; margin-right:5px;"></i>Logout</a></li>
              </ul>
            </li>

            @else

            <a href="{{route('login')}} " class="btn btn-danger btn-block" style="margin-top:10px;"><i class="fa fa-users"  style="font-size:30px; color:white; margin-right:10px;"></i>Login</a>

            @endif
          </ul>

        
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>