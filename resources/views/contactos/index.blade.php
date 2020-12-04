@extends('layouts.plantillaInterna')
@section('content')

<a href="{{route('contactos.create')}}"><button>Nuevo Mensaje</button></a> <br> <br>


@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th> 
            
            <th>Asunto</th>
            
            <th>Estatus de Atención</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablecontactos as $rowcontactos)
            <tr>
                <td>
                    <a href="{{route('contactos.show', $rowcontactos->id)}}">{{$rowcontactos->name}} </a>
                </td>
                
                <td>{{$rowcontactos->asunto}}</td>
                
                <td>@if($rowcontactos->status) Sí @else No @endif</td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
