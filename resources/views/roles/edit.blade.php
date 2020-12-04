@extends('layouts.plantillaInterna')
@section('content')


<a href="{{ route('roles.show', $modelo->id) }}"><button>Regresar</button></a> <br> <br>

<h1>Actualizar Puesto/Área</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('roles.update', $modelo->id), 'method' => 'PUT') ) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre del Puesto/Área') }}
        {{ Form::text('nombre', null, 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

</div>


    {{ Form::submit('Actualizar Puesto/Área', array('class' => 'btn btn-primary')) }}
       
{{ Form::close() }}

@endsection