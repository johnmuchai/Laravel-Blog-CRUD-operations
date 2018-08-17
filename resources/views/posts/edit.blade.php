@extends('main')

@section('title', '| Edit BLog Post')



@section('content')

<div class="row">
   {!! Form::model($post,['route'=>['posts.update', $post->id], 'method'=>'PUT', 'files'=>true]) !!} <!--or use PATCH-->

<div class="col-md-8">
        {{ Form::label('title','Edit Title:')}}
        {{ Form::text('title',null, ["class" => 'form-control input-lg'])}}

        {{ Form::label('slug', 'Edit Slug:')}}
        {{ Form::text('slug',null,['class'=>'form-control'])}}

        {{ Form::label('category_id', "Category:")}}
        {{ Form::select('category_id', $categories,null,['class'=>'form-control']) }}

        {{ Form::label('tags', "Tags:")}}
        {{ Form::select('tags[]', $tags,null,['class'=>'form-control select2-multi', 'multiple'=>'multiple']) }}
        {{ Form::label('featured_image', 'Update Featured Image')}}
        {{ Form::file('featured_image', array('style' =>'margin-top:20px; background-color:green;'))}}

        {{Form::label('body','Edit Content:')}}
         {{ Form::textarea('body',null, ["class"=> 'form-control'])}}

</div>

<div class="col-md-4">
        <div class="well">
        <dl class="dl-horizontal">
        <dt>Created At:</dt>
        <dd>Time: {{ date( 'M j, Y  H:i', strtotime($post-> created_at)) }} </dd>
        </dl>

        <dl class="dl-horizontal">
        <dt>Last Updated:</dt>
        <dd>Time: {{ date( 'M j, Y  H:i',strtotime ($post-> updated_at)) }} </dd>
        </dl>
        <hr>
        <div class="row">
        <div class="col-sm-6">
        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
        
        </div>
        <div class="col-sm-6">
        {{ Form::submit('Save changes', ['class' => 'btn btn-success btn-block'])}}
        </div>


        </div>
      </div>
      {!! Form::close() !!}
</div>
<div class="jav">
<script type="text/javascript">
$('.select2-multi').select2();
$('.select2-multi').select2().val({!! json_encode($post->tags()->pluck('tag_id')->all()) !!}).trigger('change');

</script>
</div>

@endsection