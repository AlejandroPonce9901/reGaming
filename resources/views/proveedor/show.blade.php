@extends('layouts.plantillaInterna')
@section('content')

<a href="{{route('proveedor.index')}}"><button>Inicio</button></a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del proveedor</th>
            <th>
                {{ Form::open(array('url' => route('proveedor.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('proveedor.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array(
'class' => 'btn btn-danger',
'onclick'=>"return confirm('¿Está Seguro de Eliminar este Proveedor?') "

)) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> ID </td> <td>{{$modelo->id}}</td></tr>
            <tr><td> Nombre de la Empresa </td> <td>{{$modelo->name}}</td></tr>
            <tr><td> Nombre Contacto </td> <td>{{$modelo->nombreContacto}}</td></tr>
            <tr><td> Teléfono </td> <td>{{$modelo->telefono}}</td></tr>
            <tr><td> Dirección de la Empresa </td> <td>{{$modelo->direccion}}</td></tr>
            <tr><td> Código Postal </td> <td>{{$modelo->codigoPostal}}</td></tr>
            <tr><td> RFC </td> <td>{{$modelo->rfc}}</td></tr>
            <tr><td> Email </td> <td>{{$modelo->email}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>
</table>



@endsection