@extends('layouts.plantillaInterna')
@section('content')


@if(\Auth::user()->roles_id== 1 )
<a href="{{route('compr.create')}}"><button>Registrar una Compra</button></a> <br> <br>
@else
<h1>No tiene permisos </h1>
@endif

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Proveedor</th>
            <th>Total</th>
            <th>Fecha de Compra</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableCompr as $rowCompr)
            <tr>
                <td>
                    <a href="{{route('compr.show', $rowCompr->id)}}">{{$rowCompr->id}}</a>
                </td>
                <td>@if($rowCompr->getProveedor){{$rowCompr->getProveedor->name}}@endif</td>
                <td>MXN ${{$rowCompr->total}}</td>
                <td>{{$rowCompr->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
