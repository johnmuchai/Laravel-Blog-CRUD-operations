@extends('main')

@section('title','| View post')

@section('content')

<div class="row">
<div class="col-md-8">
<img src="{{ asset('img/'. $post->image)}}" />
<h1>{{ $post ->title}}</h1>
<p class="lead">{{$post->body}}</p>
<div class="tags">
        @foreach($post->tags as $tag)
                <span class="label label-default">{{ $tag->name}}</span>
        
        @endforeach
</div>
<div class="backend-comments" style="margin-top:50px;">
        <h3>Comments <small>{{ $post->comments()->count()}} total</small></h3>
        <table class="table">
                <thead>
                        <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th width="70px"></th>
                        </tr>
                </thead>
                <tbody>
                        @foreach ($post->comments as $comment)
                        <tr>
                                <td>{{ $comment->name}}</td>
                                <td>{{ $comment->email}}</td>
                                <td>{{ $comment->comment}}</td>
                                <td>
                                        <a href="{{ route('comments.edit', $comment->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('comments.delete',$comment->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash" ></i></a>
                                </td>
                        </tr>
                        @endforeach
                </tbody>
        </table>

</div>
</div>

<div class="col-md-4">
        <div class="well" style="margin-top:20px;">

        <dl class="dl-horizontal">
        <label>Category:</label>
        <p>{{ $post->category->name}}</p>
        
        </dl>

        <dl class="dl-horizontal">
        <label>Url:</label>
        </p><a href="{{ url('blog/'.$post->slug) }}">{{url('blog/'.$post->slug)}}</a></p>
        <!--</p><a href="{{ route('blog.single', $post->slug) }}">{{url('blog.single', $post->slug)}}</a></p>-->
        
        </dl>


        <dl class="dl-horizontal">
        <label>Created At:</label>
        <p>{{ date( 'M j, Y  H:i', strtotime($post-> created_at)) }} </p>
        </dl>

        <dl class="dl-horizontal">
        <label>Last Updated:</label>
        <p>Time: {{ date( 'M j, Y  H:i',strtotime ($post-> updated_at)) }} </p>
        </dl>
        <hr>
        <div class="row">
        <div class="col-sm-6">
        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
        
        </div>
        <div class="col-sm-6">
        
        {!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
       {!! Form::submit('Delete',['class'=> 'btn btn-danger btn-block' ])!!}
        {!! FOrm::close()!!}
           </div>
             </div>
             
             

              </div>
      </div>
</div>
@endsection