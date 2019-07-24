@extends('layouts.admin')


@section('content')

 <h1>admin user index working</h1>

 <table class="table">
 	<head>
 		<tr>
 			<th>Id</th>
 			<th>Name</th>
 			<th>Email</th>
 			<th>Role</th>
 			<th>Status</th>
 			<th>Created_at</th>
 			<th>Updated_at</th>
 		</tr>
 	</head>
 	<body>
 		@if($users)

 		@foreach($users as $user)
 		<tr>
 		<td>{{$user->id}}</td>
 		<td>{{$user->name}}</td>
 		<td>{{$user->email}}</td>
 		<td>{{$user->role->name}}</td>
 		<td>{{$user->is_active==1 ? 'Active' : 'Not Active'}}</td>
 		<td>{{$user->created_at->diffForHumans()}}</td>
 		<td>{{$user->updated_at->diffForHumans()}}</td>
 		</tr>

 		@endforeach
 		@endif
 	</body>
 	
 </table>

@stop