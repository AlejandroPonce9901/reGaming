@extends('layouts.plantillaInterna')
@section('content')


<a href="{{route('cproducto.index')}}"><button>Inicio</button></a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información de la categoría de producto</th>
            <th>
                {{ Form::open(array('url' => route('cproducto.destroy', $modelo->id), 'class' => 'pull-right')) }}
                    <a class="btn btn-primary" href="{{route('cproducto.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array(
'class' => 'btn btn-danger',
'onclick'=>"return confirm('¿Está Seguro de Eliminar esta Categoría de Producto?') "

)) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Categoria </td> <td>{{$modelo->nombre}}</td></tr>
            <tr><td> Estatus </td> <td> @if($modelo->status) Sí @else No @endif </td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>

</table>


@endsection