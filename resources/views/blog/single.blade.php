@extends('main')

@section('title', '| Blog Post')

@section('content')

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <img src="{{ asset('img/'. $post->image)}}">
            <h2>{{ $post->title}}</h2>
            <p>{{ $post->body }}</p>
                <hr>
                <p>Posted In: {{ $post->category->name}}</p>
            </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="comments-title"><i class="fa fa-comment comments-icon"></i>{{ $post->comments()->count()}} Comments</h3>
                @foreach($post->comments as $comment)
                <div class="comment">
                    <div class="author-info">
                        <img src="/img/kamtu.png" class="author-image">
                        <div class="author-name">
                           <h4>{{ $comment->name}}</h4> 
                            <p>{{date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>

                        </div>
                        
                    </div>
                    <div class="comment-content">
                    <h4><i class="fa fa-lightbulb-o bulb"></i>{{ $comment->comment}}</h4>
                    </div>
                </div>
              

                @endforeach
            </div>

        </div>

        </div>
        <hr>
        <div class="row" id="commenting">
            <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top:50px;">
                {{ Form::open(['route'=>['comments.store',$post->id],'method'=>'POST'])}}
                    <div class="row">
                        <div class="col-md-6">
                            {{ Form::label('name','Name:')}}
                            {{ Form::text('name',null,['class'=>'form-control'])}}
                        </div>

                        <div class="col-md-6">
                            {{ Form::label('email','Email:')}}
                            {{ Form::text('email',null,['class'=>'form-control'])}}
                        </div>

                        <div class="col-md-12">
                            {{ Form::label('comment','Comment:')}}
                            {{ Form::textarea('comment',null,['class'=>'form-control', 'rows'=>'5'])}}

                            {{ Form::submit('Add Comment',['class'=>'btn btn-success btn-block form-control', 'style'=>'margin-top:25px; margin-bottom:20px;'])}}

                        </div>

                    </div>

                {{ Form::close()}}
            </div>

        </div>


@endsection