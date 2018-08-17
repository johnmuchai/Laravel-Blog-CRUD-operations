@extends('main')

@section('title', '| All Posts')



@section('content')

<div class="row">
<div class="col-md-10">
<h1>All Posts</h1>
</div>

<div class"col-md-2">
<a href="{{route('posts.create')}}" class="btn btn-lg btn-primary btn-h1-spacing" style="margin-top:10px;">Create New Posts</a>

</div>


    
</div><!-- End of this row -->

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th>View/Edit</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)

                <tr>
                    <th>{{$post->id}}</th>
                    <td>{{substr($post->title,0,10)}}{{ strlen($post->title) >10 ? "..." : ""}}</td>
                    <td>{{substr($post->body,0,50) }}{{ strlen($post->body) > 50 ? "......" : ""}}</td>
                    <td>{{ date( 'M j, Y', strtotime($post->created_at))}}</td>
                    <td> <a href="{{ route('posts.show', $post->id)}}" class="btn btn-info ">View</a><a href="{{ route('posts.edit', $post->id)}}" class="btn btn-secondary">Edit</a></td>
                </tr>
                @endforeach
 

             </tbody>

        </table>

        <div class="text-center">
            {!! $posts->links(); !!}

        </div>

    </div>

</div>  

@stop