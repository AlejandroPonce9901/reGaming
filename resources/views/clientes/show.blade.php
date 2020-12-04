@extends('layouts.plantillaInterna')
@section('content')

<a href="{{route('clientes.index')}}"><button>Inicio</button></a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del Cliente</th>
            <th>
                {{ Form::open(array('url' => route('clientes.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('clientes.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array(
'class' => 'btn btn-danger',
'onclick'=>"return confirm('¿Está Seguro de Eliminar este Cliente?') "

)) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> ID Cliente </td> <td>{{$modelo->id}}</td></tr>
            <tr><td> Nombre </td> <td>{{$modelo->name}}</td></tr>
            <tr><td> Apellido Paterno </td> <td>{{$modelo->apellidoPa}}</td></tr>
            <tr><td> Apellido Materno </td> <td>{{$modelo->apellidoMa}}</td></tr>
            <tr><td> Email </td> <td>{{$modelo->email}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>
</table>



@endsection