@extends('layouts.plantillaInterna')
@section('content')


<a href="{{route('productos.index')}}"><button>Inicio</button></a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del producto</th>
            <th> @if(\Auth::user()->roles_id== 1 )
            {{ Form::open(array('url' => route('productos.destroy', $modelo->id), 'class' => 'pull-right')) }}
                    <a class="btn btn-primary" href="{{route('productos.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array(
                    'class' => 'btn btn-danger',
                    'onclick'=>"return confirm('¿Está Seguro de Eliminar este Producto?') ")) }}
                {{ Form::close() }}
            @else
            <h3>No tiene permisos de actualizar productos</h3>
@endif     
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> ID de producto </td> <td>{{$modelo->id}}</td></tr>
            <tr><td> Nombre de producto </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Descripción </td> <td>{{$modelo->descripcion}}</td></tr>
            <tr><td> Precio </td> <td>MXN ${{$modelo->precio}}</td></tr>
            <tr><td> Marca </td> <td>{{$modelo->marca}}</td></tr>
            <tr><td> Modelo </td> <td>{{$modelo->modelo}}</td></tr>
            <tr><td> Proovedor </td> <td>@if($modelo->id_proveedor){{$modelo->getProveedor->name}} @endif</td></tr>
            <tr><td> Disponible para Venta </td> <td> @if($modelo->venta) Sí @else No @endif </td></tr>
            <tr><td> Categoría </td> <td>{{$modelo->getcProducto->nombre}}</td></tr>
            <tr><td> Existencias </td> <td>{{$modelo->cantidad}}</td></tr>
            <tr><td> Imagen </td> <td> @if($modelo->imgNombreFisico) <img src="{{ asset('storage/'.$modelo->imgNombreFisico )}}" width="30%"> @else No hay @endif </td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>

</table>


@endsection