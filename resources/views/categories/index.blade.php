@extends('main')

@section('title','| All Categories')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
                    <table class="table">
                        <thead>
    <tr>
      <th>#</th>
      <th>Category Name</th>
      
</tr>
  </thead>

  <tbody>
  @foreach ($categories as $category)
    <tr>
      
      <th>{{ $category->id }}</th>
      <td>{{ $category->name}}</td>
     </tr>
     
@endforeach

</tbody>
<hr>
</table>
                
</div>

<div class="col-md-3 col-md-offset-1">
        <div class="well" style="margin-top:40px;">
        {!! Form::open(['route'=>'categories.store','method'=>'POST'])!!}
                <h2> New Category</h2>

                 {{ Form::label('name','Enter Name: ')}}
                 {{ Form::text('name',null,['class'=>'form-control','style'=>'margin-bottom:20px;'])}}

                    {{ Form::submit('Create New Category',['class'=>'btn btn-primary btn-block'])}}
        {!! Form::close() !!}
        </div>
    </div>
</div>




@endsection