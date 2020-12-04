@extends('layouts.plantillaInterna')
@section('content')


@if( \Auth::user()->roles_id== 1)
<a href="{{route('proveedor.create')}}"><button>Registrar Proveedor</button></a> <br> <br>
@else
No tiene permisos de registrar usuarios 
@endif

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre Proveedor</th> 
            <th>ID</th>
            <th>Correo</th>
            <th>Nombre Contacto</th>
            <form>
<div class="row">
<div class="form-group col-md-3 " >
<label for="nombre">Filtrar Proveedor por Nombre</label>
<input type="text" name="nombre" value="{{$filtroNombre}}" class="form-control">
<button>Buscar</button>
</form>     
        </tr>
    </thead>
    <tbody>
        @foreach($tableProveedor as $rowProveedor)
            <tr>
                <td>
                    <a href="{{route('proveedor.show', $rowProveedor->id)}}">{{$rowProveedor->name}}</a>
                </td>
                <td>{{$rowProveedor->id}}</td>
                <td>{{$rowProveedor->email}}</td>
                <td>{{$rowProveedor->nombreContacto}}</td>
                

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
