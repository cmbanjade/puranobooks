@extends('admin.layout')

@section('content')

<h1>Users</h1>
	<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($users)

    	@foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role ? $user->role->name : 'user'}}</td>
        <td>{{$user->created_at->DiffForHumans()}}</td>
        <td>{{$user->updated_at->DiffForHumans()}}</td>
      </tr>
        @endforeach
     @endif
     
  </table>

@endsection
