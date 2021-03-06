@extends('layouts.plantillaInterna')
@section('content')


<a href="{{route('roles.index')}}"><button>Inicio</button></a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del Puesto/Área</th>
            <th>
                {{ Form::open(array('url' => route('roles.destroy', $modelo->id), 'class' => 'pull-right')) }}
                    <a class="btn btn-primary" href="{{route('roles.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array(
'class' => 'btn btn-danger',
'onclick'=>"return confirm('¿Está Seguro de Eliminar este Puesto?') "

)) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Puesto/Área </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>

</table>


@endsection