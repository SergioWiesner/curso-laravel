@extends('holamundo')
@section('contenido-uno')
    <h1>Saludos desde el index</h1>
    @include('estudiantes.componentes.lista-estudiantes', ['estudiantes' => $estudiantes])
@endsection
