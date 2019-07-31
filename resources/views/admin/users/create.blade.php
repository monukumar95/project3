
@extends('layouts.admin')


@section('content')

 <h1>admin create working</h1>

 {{  Form::open( array('url' => action('AdminUsersController@store'), 'files'=>true,'method'=>'post') ) }}

<div class="form-group">
 {!! form::label('name','Name:')!!}
 {!!form::text('name',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
 {!! form::label('email','Email:')!!}
 {!!form::email('email',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
 {!! form::label('role_id','Role:')!!}
 {!!form::select('role_id',[''=>'Choose Options']+$roles,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
 {!! form::label('is_active','Status:')!!}
 {!!form::select('is_active',['1'=>'Active','0'=>'Not Active'],0,['class'=>'form-control'])!!}
</div>
<div class="form-group">
 {!! form::label('photo_id','Photo:')!!}
 {!!form::file('photo_id',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
 {!! form::label('password','Password:')!!}
 {!!form::password('password',['class'=>'form-control'])!!}
</div>
<div class="form-group">
 {!!form::submit('Create User',['class'=>'btn btn-primary'])!!}
</div>

{{ Form::close() }}

@if(count($errors)>0)

<div class="alert alert-danger">
	<ul>

	@foreach($errors->all() as $error)

	<li>{{$error}}</li>

	@endforeach
	@endif 

	</ul>
</div>

 
@stop 