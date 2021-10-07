@extends('layout')

@section('contenido')
<form action="{{ route('users.store') }}" method="POST">
@csrf
<label>Nombres</label><input type="text" name="name">
<label>Apellidos</label><input type="text" name="apellidos">
<label>CorreoElectronico</label><input type="text" name="email">
<label>Password</label><input type="text" name="password">
<label>IdTipoDocumento</label><input type="text" name="id_tipo_documento">
<label>NumeroDocumento</label><input type="text" name="numero_documento">
<label>Telefono</label><input type="text" name="telefono">
<label>Direccion</label><input type="text" name="direccion">
<label>Estado</label><input type="text" name="estado">
<label></label><button type="submit" class="btn btn-primary">Registrar</button>
</form>
@endsection
