@extends('layouts.plantillaInterna')
@section('content')

<a href="{{route('dcompra.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del detalle de compra compra</th>
            <th>
                {{ Form::open(array('url' => route('dcompra.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('dcompra.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array(
'class' => 'btn btn-danger',
'onclick'=>"return confirm('¿Está Seguro de Eliminar este Detalle de Compra?') "

)) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Folio Detalle de Compra </td> <td>{{$modelo->id}}</td></tr>
            <tr><td> Fecha </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Precio </td> <td>{{$modelo->precio}}</td></tr>
            <tr><td> Folio de Compra </td> <td>@if($modelo->getCompr){{$modelo->getCompr->id}}@endif</td></tr>
            <tr><td> Nombre Producto </td> <td>{{$modelo->getProducto->nombre}}</td></tr>
    </tbody>
</table>



@endsection