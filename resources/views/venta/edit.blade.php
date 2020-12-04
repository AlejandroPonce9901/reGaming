@extends('layouts.plantillaInterna')
@section('content')

<a href="{{ route('venta.show', $modelo->id) }}"><button>Regresar</button></a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('venta.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="row">

    <div class="form-group col-md-3">
        {{ Form::label('id_clientes', 'Nombre Clientes') }}
        {{ Form::select('id_clientes', $tableClientes, Request::old('id_clientes'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('total', 'total') }}
        {{ Form::number('total', Request::old('number'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>
    


</div>

    {{ Form::submit('Actualizar venta', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection