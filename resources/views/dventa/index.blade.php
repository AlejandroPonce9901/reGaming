@extends('layouts.plantillaInterna')
@section('content')


@if(\Auth::user()->roles_id== 1 )
<a href="{{route('dventa.create')}}"><button>Registrar un Detalle de Venta</button></a> <br> <br>
@else
<h1>No tiene permisos de registrar ventas</h1>
@endif

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Folio Detalle Venta</th>
            <th>Folio de Venta</th>
            <th>Producto</th>
            <th>ID del Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableDventa as $rowDventa)
            <tr>
                <td>
                    <a href="{{route('dventa.show', $rowDventa->id)}}">{{$rowDventa->id}}</a>
                </td>
                <td><a href="{{route('venta.show', $rowDventa->id_venta)}}">@if($rowDventa->getVenta){{$rowDventa->getVenta->id}}@endif</td>
                <td><a href="{{route('productos.show', $rowDventa->id_producto)}}">@if($rowDventa->getProducto){{$rowDventa->getProducto->nombre}}@endif</td>
                <td>{{$rowDventa->id_producto}}</td>
                <td>{{$rowDventa->cantidad}}</td>
                <td>MXN ${{$rowDventa->precio}}</td>
                <td>{{$rowDventa->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
