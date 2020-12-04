@extends('layouts.plantillaInterna')
@section('content')

<a href="{{route('venta.index')}}"><button>Inicio</button></a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información de la venta</th>
            <th>
                {{ Form::open(array('url' => route('venta.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('venta.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array(
'class' => 'btn btn-danger',
'onclick'=>"return confirm('¿Está Seguro de Eliminar esta Venta?') "

)) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Id de la Venta </td> <td>{{$modelo->id}}</td></tr>
            <tr><td> Cliente </td> <td>@if($modelo->getClientes){{$modelo->getClientes->name}}@endif</td></tr>
            <tr><td> Total </td> <td>MXN ${{$modelo->total}}</td></tr>
            <tr><td> Fecha de la Venta </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Última modificación </td> <td>{{$modelo->updated_at}}</td></tr>
            </tbody>
</table><br>


<table class="table table-striped">
    <thead>
    <tr>
    <th colspan="3" style="text-align: center; color:#f91c0e">DETALLE DE VENTA</th></tr>
        <tr>
            
            <th>Producto</th>
            
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($detalles as $rowDventa)
            <tr>
                <td><a href="{{route('venta.show', $rowDventa->id_venta)}}">@if($rowDventa->getVenta){{$rowDventa->getVenta->id}}@endif</td>
                <td>{{$rowDventa->cantidad}}</td>
                <td>MXN ${{$rowDventa->precio}}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>



@endsection