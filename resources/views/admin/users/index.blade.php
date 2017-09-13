@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-success">Registrar nuevo usuario</a>
<table class="table table-striped ">
	<thead>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>CORREO</th>
		<th>TIPO</th>
		<th>ACCIÓN</th>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email}}</td>
			<td>
				@if($user->type == "admin")
					<span class="badge badge-danger">{{ $user->type }}</span>
				@else
					<span class="badge badge-primary">{{ $user->type }}</span>
				@endif
			</td>
			<td><a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger"><i class="material-icons">close</i></a> 
				<a href="" class="btn btn-warning"><i class="material-icons">mode_edit</i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
{!! $users->render() !!}
@endsection
