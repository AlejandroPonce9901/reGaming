@extends('layouts.plantillaInterna')
@section('content')

<a href="{{ route('compr.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('compr.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="row">



    <div class="form-group col-md-3">
        {{ Form::label('id_proveedor', 'Id del Proveedor') }}
        {{ Form::select('id_proveedor', $tableProveedor, Request::old('id_proveedor'),  
           array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('total', 'total') }}
        {{ Form::number('total', Request::old('number'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    
    


</div>
<div class="form-group cold-md4" >
    {{ Form::submit('Actualizar compr', array('class' => 'btn btn-primary')) }}
        </div>
{{ Form::close() }}

@endsection