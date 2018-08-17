@extends('main')
@section('title', '| Homepage')


@section('content')
  <div class="row">
        <div class="col-md-12">
          <div class="jumbotron" style="margin-top:10px; background-color:rgba(176,196,222,0.4);">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>
        </div>
      </div>
      <!-- end of header .row -->

<div class="row">
   <div class="col-md-7">

        @foreach($posts as $post)
          <div class="post">
            
            <h3>{{ $post->title}}</h3>
            <p> <img src="{{ asset('img/'. $post->image) }}" width=180px height=100px />
            {{ $post->body}}
            </p>
           

            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
          </div>
          <hr>
          @endforeach

          </div>

        <div class="col-md-3 col-md-offset-1" style="background-color:rgba(0,139,139,0.5); opacity: 0.5; border-left: 2px solid #808080; height:1000px;">
          <h3>Sidebar Contents</h3>

          <div class="twitter-feeds" style="background-color:white; height:400px; padding:10px 10px 10px 10px;">
          <h4 style="color:#00008B;">Twitter Feeds</h4>
          <hr class="horizontal-rule" style="background-color:#000000;">

           </div>

           <div class="twitter-feeds" style="margin-top:20px; background-color:rgba(0,206,209,0.8); height:400px; padding:10px 10px 10px 10px;">
          <h4 style="color:#00008B;">Advertisement</h4>
          <hr class="horizontal-rule" style="background-color:#000000;">

           </div>
        </div>
</div>
      

    
@endsection