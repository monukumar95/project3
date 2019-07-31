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
 			<th>Body</th>
 			<th>Created_at</th>
 			<th>Updated_at</th>
 		</tr>
 	</head>
 	<body>
 		@if($posts)

 		@foreach($posts as $post)
 		<tr>
 		<td>{{$post->id}}</td>
 		<td><img height="50" src="{{$post->photo ? $post->photo->file : 'photo not found'}}"></td>
 		<td><a href="{{route('posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
 		<td>{{$post->category ? $post->category->name : 'Uncategoriged'}}</td>
 		
 		<td>{{$post->title}}</td>
 		<td>{{str_limit($post->body,30)}}</td>
 		<td>{{$post->created_at->diffForHumans()}}</td>
 		<td>{{$post->updated_at->diffForHumans()}}</td>
 		</tr>

 		@endforeach
 		@endif
 	</body>
 	
 </table>

@stop