@extends('layout.inicio')
@section('titulo', 'Estudiantes')
@section('content')

    <table style="width:50%; text-align: center;" border="1" >
        <tr>
            <th> Nombre </th>
            <th> Email </th>
            <th> Telefono </th>
            <th> Lenguaje </th>
            <th> Acciones </th>
        </tr>
        @foreach ($estudiantes as $estudiante)
        <tr>
            <td>{{ $estudiante['name'] }}</td>
            <td>{{ $estudiante['email'] }}</td>
            <td>{{ $estudiante['phone'] }}</td>
            <td>{{ $estudiante['language'] }}</td>
            <td>
                <a href="{{ route('editar', ['id' => $estudiante['id']]) }}">Editar</a>         
                <a href="{{ route('borrar', ['id' => $estudiante['id']]) }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection