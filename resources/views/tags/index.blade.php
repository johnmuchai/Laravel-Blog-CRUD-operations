@extends('main')

@section('title','| All Tags')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
                    <table class="table">
                        <thead>
    <tr>
      <th>#</th>
      <th>Tag Name</th>
      
</tr>
  </thead>

  <tbody>
  @foreach ($tags as $tag)
    <tr>
      
      <th>{{ $tag->id }}</th>
      <td><a href="{{ route('tags.show', $tag->id)}}">{{ $tag->name}}</a></td>
     </tr>
     
     
@endforeach

</tbody>
<hr>
</table>
                
</div>

<div class="col-md-3 col-md-offset-1">
        <div class="well" style="margin-top:40px;">
        {!! Form::open(['route'=>'tags.store','method'=>'POST'])!!}
                <h2> New Tag</h2>

                 {{ Form::label('name','Enter Name: ')}}
                 {{ Form::text('name',null,['class'=>'form-control','style'=>'margin-bottom:20px;'])}}

                    {{ Form::submit('Create New Tag',['class'=>'btn btn-primary btn-block'])}}
        {!! Form::close() !!}
        </div>
    </div>
</div>




@endsection