@extends('layouts.plantillaInterna')
@section('content')

@if(\Auth::user()->roles_id== 1 )
<a href="{{route('dcompra.create')}}"><button>Registrar un Detalle de Compra</button></a> <br> <br>
@else
<h3>No tiene permitido registrar compras</h3>
@endif

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
        <th>Folio Detalle Compra</th>
            <th>Folio de Compra</th>
            <th>Producto</th>
            <th>ID del Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableDcompra as $rowDcompra)
        <tr>
                <td>
                    <a href="{{route('dcompra.show', $rowDcompra->id)}}">{{$rowDcompra->id}}</a>
                </td>
                <td>@if($rowDcompra->getCompr)<a href="{{route('compr.show', $rowDcompra->getCompr->id)}}">{{$rowDcompra->getCompr->id}}@endif</a></td>
                <td>@if($rowDcompra->getProducto)<a href="{{route('productos.show', $rowDcompra->getProducto->id)}}">{{$rowDcompra->getProducto->nombre}}@endif</a></td>
                <td>{{$rowDcompra->id_producto}}</td>
                <td>{{$rowDcompra->cantidad}}</td>
                <td>MXN ${{$rowDcompra->precio}}</td>
                <td>{{$rowDcompra->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection