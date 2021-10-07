@extends('layout')

@section('contenido')

<a href="{{ route('users.create') }}" title="Crear" class="btn btn-primary">
<i class="fas fa-plus-circle"></i>Registrar</a>

<table class="table table-bordered table-striped">
<thead>
    <th>Id</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>CorreoElectronico</th>
    <th>Contrasea</th>
    <th>TipoDocumento</th>
    <th>NumeroDocumento</th>
    <th>Telefono</th>
    <th>Direccion</th>
    <th>Estado</th>
</thead>
<tbody>
@foreach($users as $user)
<tr>
    <td>
        {{ $user->id }}
    </td>
    <td>
        {{ $user->name }}
    </td>
    <td>
        {{ $user->apellidos }}
    </td>
    <td>
        {{ $user->email }}
    </td>
    <td>
        {{ $user->password }}
    </td>
    <td>
        {{ $user->id_tipo_documento }}
    </td>
    <td>
        {{ $user->numero_documento }}
    </td>
    <td>
        {{ $user->telefono }}
    </td>
    <td>
        {{ $user->Direccion }}
    </td>
    <td>
        {{ $user->Estado }}
    </td>
    <td>
        <form method="POST">
        <a href="" title="edit">
        <i class="fas fa-edit fa-lg"></i>Editar</a>
        @csrf
            @method('DELETE')
            <button type="submit" title="Eliminar" style="">
                <i class="fas fa-trash fa-lg text-danger"></i>Eliminar
            </button>
        </form>
     </td>
</tr>
@endforeach
</tbody>
</table>
@endsection
