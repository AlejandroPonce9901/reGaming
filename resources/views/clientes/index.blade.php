@extends('layouts.plantillaInterna')
@section('content')


@if(\Auth::user()->roles_id== 1 )
<a href="{{route('clientes.create')}}"><button>Registrar Cliente</button></a> <br> <br>
@else
<h1>No tiene permisos de registrar clientes</h1>
@endif

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th> 
            <th>Correo</th>
            <th>ID Cliente</th>
            <form>
<div class="row">
<div class="form-group col-md-3 " >
<label for="nombre">Filtrar Cliente por nombre</label>
<input type="text" name="nombre" value="{{$filtroNombre}}" class="form-control">

<button>Buscar</button>
</form>
        </tr>
    </thead>
    <tbody> 
        @foreach($tableclientes as $rowClientes)
            <tr>
                <td>
                    <a href="{{route('clientes.show', $rowClientes->id)}}">{{$rowClientes->name}} {{$rowClientes->apellidoPa}}</a>
                </td>
                <td>{{$rowClientes->email}}</td>
                <td>{{$rowClientes->id}}</td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection

