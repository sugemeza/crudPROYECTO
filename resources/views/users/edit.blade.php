@extends('layout')

@section('contenido')
<h1>EDITA REGISTRO</h1>
<form action="{{ route('users.update',$users->id) }}" method="POST" >
@csrf
@method('PUT')
<input type="text" name="name" value="{{ $users->name }}">
<input type="text" name="Apellidos" value="{{ $users->Apellidos }}">
<input type="text" name="email" value="{{ $users->email }}">
<input type="text" name="password" value="{{ $users->password }}">
<input type="text" name="IdTipoDocumento" value="{{ $users->IdTipoDocumento }}">
<input type="text" name="NumeroDocumento" value="{{ $users->NumeroDocumento }}">
<input type="text" name="Telefono" value="{{ $users->Telefono }}">
<input type="text" name="Direccion" value="{{ $users->Direccion }}">
<input type="text" name="Estado" value="{{ $users->Estado }}">
<button type="submit" class="btn btn-primary">EDITAR</button>
</form>
@endsection

