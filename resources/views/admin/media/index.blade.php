@extends('layouts.admin')


@section('content')

 <h1>Media</h1>

 @if($photos)

 <table class="table">
 	<head>
 		<tr>
 			<th>Id</th>
 			<th>Name</th>
 			<th>Created</th>
 			
 			
 		</tr>
 	</head>
 	<body>
 	@foreach($photos as $photo)
 	<tr>
 		<td>{{$photo->id}}</td>
 		<td><img height="60" src="{{$photo->file}}"></td>
 		<td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
 	
 	<td>

 	{{  Form::open( array('url' => action('AdminMediaController@destroy',$photo->id), 'files'=>true,'method'=>'DELETE'))}}

 	<div class="form-group">
 		
   {!!form::submit('Delete',['class'=>'btn btn-danger'])!!}
   </div>
   </td>

    {{ Form::close() }}
 	</div>
 	</tr>





 	@endforeach
 	</body>
 	</table>

 	@endif


 @stop