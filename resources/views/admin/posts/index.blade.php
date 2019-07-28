@extends('layouts.admin')


@section('content')

 <h1>Post</h1>

 <table class="table">
 	<head>
 		<tr>
 			<th>Id</th>
 			<th>Photo</th>
 			<th>Owner</th>
 			<th>Category</th>
 			
 			<th>Title</th>
 			<th>Created_at</th>
 			<th>Updated_at</th>
 		</tr>
 	</head>
 	<body>
 		@if($posts)

 		@foreach($posts as $post)
 		<tr>
 		<td>{{$post->id}}</td>
 		<td><img height="50" src="{{$post->photo_id}}"></td>
 		<td>{{$post->user->name}}</td>
 		<td>{{$post->category_id}}</td>
 		
 		<td>{{$post->title}}</td>
 		<td>{{$post->body}}</td>
 		<td>{{$post->created_at->diffForHumans()}}</td>
 		<td>{{$post->updated_at->diffForHumans()}}</td>
 		</tr>

 		@endforeach
 		@endif
 	</body>
 	
 </table>

@stop