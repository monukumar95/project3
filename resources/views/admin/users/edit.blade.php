
@extends('layouts.admin')


@section('content')

 <h1>Edit User</h1>

<div class="col-sm-3">

	<img src="{{$user->photo ? $user->photo->file : 'http://placehold.it'}}" alt="" class="img-responsiv img-rounded">
	</div>

<div class="col-sm-3">
 {{  Form::model($user, array('url' => action('AdminUsersController@update',$user->id), 'files'=>true,'method'=>'PATCH') )  }}

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

</div>

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