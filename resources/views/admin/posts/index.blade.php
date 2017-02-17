@extends('admin.layout')

@section('content')
<h1>Posts</h1>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Owner</th>
        <th>Category</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($posts)

    	@foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td><a href="{{route('admin.posts.edit', $post->id)}}"> {{$post->user->name}}</a></td>
        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->created_at->DiffForHumans()}}</td>
        <td>{{$post->updated_at->DiffForHumans()}}</td>
      </tr>
        @endforeach
     @endif
     
  </table>

@endsection