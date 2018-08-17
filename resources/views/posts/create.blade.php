@extends('main')

@section('tile', '| Create Blog')
@section('stylesheets')
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script type="text/javascript">
  tinymce.init({
    selector:'textarea'
  });

</script>

@endsection


@section('content')



<div class="row">
      <div class="col-md-8 col-md-offset-2" style="background-color: rgba(0,128,128,0.5);">
        <h1>Create New Blog</h1>
        <hr>
        {!! Form::open(array('route' =>'posts.store', 'files'=>true)) !!}
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', null,array('class' => 'form-control', 'required'=>'','maxlength'=>'255')) }}

            {{ Form::label('slug','Slug:') }}
            {{ Form::text('slug',null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'255'))}}

            {{ Form::label('category_id', 'Category:')}}
            <select class="form-control" name="category_id">
                @foreach( $categories as $category)
            <option value='{{ $category->id}}'>{{$category->name}}</option>
              @endforeach
            </select>

            {{ Form::label('tags', 'Tags:') }}
				<select class="form-control select2-multi" name="tags[]" multiple="multiple">
					@foreach($tags as $tag)
						<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
					@endforeach

        </select>
        
        {{ Form::label('featured_image','Upload Featured Image')}}
        {{Form::file('featured_image',array('class' =>'btn btn-success btn-sm btn-block','style'=>'margin-top:20px; backgrond-color:rgba(0,255,127,0.6);')) }}


            {{ Form::label('body', "Post Body:")  }}
            {{Form::textarea('body', null,array('class' =>'form-control', 'required'=>'','id'=>'mytextarea'))}}

            {{Form::submit('Create Post', array('class' =>'btn btn-success btn-lg btn-block', 'style' =>'margin-top:20px;'))}}
        {!!Form::close() !!}
      </div>
</div>
<div>
<script type="text/javascript">
  $('.select2-multi').select2();
 
  

  </script>

</div>
@endsection