@extends('layouts.plantillaInterna')
@section('content')


@if(\Auth::user()->roles_id== 1 )
<a href="{{route('venta.create')}}"><button>Registrar una Venta</button></a> <br> <br>
@else
<h1>No tiene permisos de registrar ventas</h1>
@endif

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>

@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Cliente</th>
            <th>Total</th>
            <th>Fecha de Venta</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableVenta as $rowVenta)
            <tr>
                <td>
                    <a href="{{route('venta.show', $rowVenta->id)}}">{{$rowVenta->id}}</a>
                </td>
                <td>@if($rowVenta->getClientes){{$rowVenta->getClientes->name}}@endif</td>
                <td>MXN ${{$rowVenta->total}}</td>
                <td>{{$rowVenta->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection