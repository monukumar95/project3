@extends('layouts.admin')


@section('content')

 <h1> Categories edit</h1>
<div class="col-sm-6">
 {{Form::model($category, array('url' => action('AdminCategoriesController@update',$category->id), 'files'=>true,'method'=>'PATCH'))}}

<div class="form-group">
 {!! form::label('name','Name:')!!}
 {!!form::text('name',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
 {!!form::submit('Update Category',['class'=>'btn btn-primary col-sm-6'])!!}
</div>

{{ Form::close() }}

{{  Form::open( array('url' => action('AdminCategoriesController@destroy',$category->id), 'files'=>true,'method'=>'DELETE') ) }}

<div class="form-group">
 {!!form::submit('Delete Category',['class'=>'btn btn-danger col-sm-6'])!!}
</div>


{{ Form::close() }}
</div>
<tr>
<div class="col-sm-6">


</div>
</tr>
  @stop