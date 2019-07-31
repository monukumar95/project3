@extends('layouts.admin')


@section('content')

 <h1 >Update Post</h1>

 {{Form::model($post, array('url' => action('AdminPostsController@update',$post->id), 'files'=>true,'method'=>'PATCH'))}}

<div class="form-group">
 {!! form::label('title','Title:')!!}
 {!!form::text('title',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
 {!! form::label('category_id','Category:')!!}
 {!!form::select('category_id',$categories,null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
 {!! form::label('photo_id','Photo:')!!}
 {!!form::file('photo_id',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
 {!! form::label('body','Description:')!!}
 {!!form::textarea('body',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
 {!!form::submit('Update Posts',['class'=>'btn btn-primary col-sm-6'])!!}
</div>

{{ Form::close() }}



 {{  Form::open( array('url' => action('AdminUsersController@destroy',$post->id), 'files'=>true,'method'=>'DELETE') ) }}
<div class="form-group">
 {!!form::submit('Delete Posts',['class'=>'btn btn-danger col-sm-6'])!!}
</div>
{{ Form::close() }}

 
 @stop