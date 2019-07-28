@extends('layouts.admin')


@section('content')

 <h1>Create Post</h1>

 {{  Form::open( array('url' => action('AdminPostsController@store'), 'files'=>true,'method'=>'post') )  }}

<div class="form-group">
 {!! form::label('title','Title:')!!}
 {!!form::text('title',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
 {!! form::label('category_id','Category:')!!}
 {!!form::select('category_id',[1=>'PHP',0=>'Javascript',2=>'Python',3=>'Java'],null,['class'=>'form-control'])!!}
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
 {!!form::submit('Create Posts',['class'=>'btn btn-primary'])!!}
</div>

{{ Form::close() }}

 
 @stop