@extends('layouts.plantillaInterna')
@section('content')

<a href="{{route('compr.index')}}"><button>Inicio</button></a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información de la compr</th>
            <th>
                {{ Form::open(array('url' => route('compr.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('compr.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array(
'class' => 'btn btn-danger',
'onclick'=>"return confirm('¿Está Seguro de Eliminar esta Compra?') "

)) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Id de la Compra </td> <td>{{$modelo->id}}</td></tr>
            <tr><td> Proveedor </td> <td>@if($modelo->getProveedor){{$modelo->getProveedor->name}}@endif</td></tr>
            <tr><td> Total </td> <td>MXN ${{$modelo->total}}</td></tr>
            <tr><td> Fecha de la Compra </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Última modificación </td> <td>{{$modelo->updated_at}}</td></tr>
            </tbody>
</table>



@endsection