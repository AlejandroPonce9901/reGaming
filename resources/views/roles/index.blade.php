@extends('layouts.plantillaInterna')
@section('content')


@if(\Auth::user()->roles_id== 1 )
<a href="{{route('roles.create')}}"><button>Registrar Puesto</button></a> <br> <br>
@else
<h1>No tiene permisos de registrar puestos</h1>
@endif

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Puesto/Área</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableRoles as $rowRoles)
            <tr>
                <td>
                    <a href="{{route('roles.show', $rowRoles->id)}}">{{$rowRoles->nombre}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
