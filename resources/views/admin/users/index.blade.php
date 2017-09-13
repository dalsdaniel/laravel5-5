@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-success">Registrar nuevo usuario</a>
<table class="table table-striped ">
	<thead>
		<th class="text-primary">ID</th>
		<th class="text-primary">NOMBRE</th>
		<th class="text-primary">CORREO</th>
		<th class="text-primary">TIPO</th>
		<th class="text-primary">ACCIÓN</th>
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
			<td><a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')" class="btn btn-danger text-white"><i class="material-icons">close</i></a> 
				<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning text-white"><i class="material-icons">mode_edit</i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
{!! $users->render() !!}
@endsection
