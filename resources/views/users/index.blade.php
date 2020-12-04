@extends('layouts.plantillaInterna')
@section('content')


@if( \Auth::user()->roles_id== 1)
<a href="{{route('users.create')}}"><button>Registrar Usuario</button></a> <br> <br>
@else
No tiene permisos de registrar usuarios 
@endif

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Puesto</th>
            <form>
<div class="row">
<div class="form-group col-md-3 " >
<label for="nombre">Filtrar Usuario por Nombre</label>
<input type="text" name="nombre" value="{{$filtroNombre}}" class="form-control">
<button>Buscar</button>
</form>

        </tr>
    </thead>
    <tbody>
        @foreach($tableUsers as $rowUser)
            <tr>
                <td>
                    <a href="{{route('users.show', $rowUser->id)}}">{{$rowUser->name}} {{$rowUser->apellidoPa}}</a>
                </td>
                <td>{{$rowUser->email}}</td>
                <td>@if($rowUser->getroles){{$rowUser->getroles->nombre}}@endif</td></tr>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection


