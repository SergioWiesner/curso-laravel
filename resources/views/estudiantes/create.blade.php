@extends('holamundo')
@section('contenido-dos')
    <form action="{{ route('estudiante.store') }}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" />
        <input type="number" name="curso" placeholder="Curso" />
        <input type="text" name="telefono" placeholder="Teléfono" />
        <input type="text" name="correo" placeholder="Correo" />
        <input type="submit" value="Agregar">
    </form>
@endsection
