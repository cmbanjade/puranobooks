 @extends('admin.layout')

@section('content')
<h1>Edit Post</h1>

	{!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id]])!!}

		<div class="form-group">
			{!! Form::label('title','Title:')!!}
			{!! Form::text('title', null , ['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id','Category:')!!}
			{!! Form::select('category_id', [''=>'Choose Categories']+ $categories, null, ['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('body','Description:')!!}
			{!! Form::textarea('body', null, ['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!! Form::submit('Update Post',['class'=>'bth bth-primary col-sm-6'])!!}
		</div>
{!! Form::close()!!}
	
	{!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]])!!}

		<div class="form-group">
			{!! Form::submit('Delete Post',['class'=>'bth bth-danger col-sm-6'])!!}
		</div>
	{!! Form::close()!!}


	<div class="row">
		@include('includes.form_error')

	</div>



@endsection