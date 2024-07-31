<table>
    <tr>
        <th>Nombre</th>
        <th>Curso</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Fecha de creación</th>
        <th>Fecha de actualización</th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($estudiantes as $estudiante)
        <tr>
            <form action="{{route('estudiante.update', ['id' => $estudiante->id])}}" method="POST">
            <td>
                @csrf
                @method("put")
                <input type="text" name="nombre" id="nombre" value="{{ $estudiante->nombre }}"></td>
            <td><input type="number" name="curso" placeholder="Curso" value="{{ $estudiante->curso }}"/></td>
            <td><input type="text" name="telefono" placeholder="Teléfono" value="{{ $estudiante->telefono }}"/></td>
            <td><input type="text" name="correo" placeholder="Correo"  value="{{ $estudiante->correo }}"/></td>
            <td>{{ $estudiante->created_at }}</td>
            <td>{{ $estudiante->updated_at }}</td>
            <td><input type="submit" value="Actualizar"></td>
            <td><a href="{{route('estudiante.edit', ["id" => $estudiante->id])}}" target="_blank">Ver registro</a></td>
        </form>
        </tr>
    @endforeach
</table>