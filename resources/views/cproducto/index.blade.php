@extends('layouts.plantillaInterna')
@section('content')

@if(\Auth::user()->roles_id== 1 )
<a href="{{route('cproducto.create')}}"><button>Registrar categoría producto</button></a> <br> <br>
@else
<h1>No tiene permisos de registrar categorias</h1>
@endif

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableCproducto as $rowCproducto)
            <tr>
                <td>
                    <a href="{{route('cproducto.show', $rowCproducto->id)}}">{{$rowCproducto->nombre}}</a>
                </td>
                <td>@if($rowCproducto->status) Sí @else No @endif</td>
    
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
