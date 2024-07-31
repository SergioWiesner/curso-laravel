@extends('holamundo')
@section('contenido-uno')
<h1>Saludos desde el edit</h1>
<form action="{{ route('estudiante.update', ['id' => $estudiante->id]) }}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="nombre" id="nombre" value="{{ $estudiante->nombre }}">
    <input type="number" name="curso" placeholder="Curso" value="{{ $estudiante->curso }}" />
    <input type="text" name="telefono" placeholder="Teléfono" value="{{ $estudiante->telefono }}" />
    <td><input type="text" name="correo" placeholder="Correo" value="{{ $estudiante->correo }}" />
        {{ $estudiante->created_at }}
        {{ $estudiante->updated_at }}
        <input type="submit" value="Actualizar">
</form>

@endsection

@section('contenido-dos')
<h2>Eliminar registro</h2>
<form action="{{route('estudiante.delete', ['id' => $estudiante->id])}}" method="post">
    @csrf
    @method("delete")
    <input type="submit" value="Eliminar registro">
</form>
@endsection
