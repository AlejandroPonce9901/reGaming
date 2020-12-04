@extends('layouts.plantillaInterna')
@section('content')

<a href="{{ route('dventa.show', $modelo->id) }}"><button>Regresar</button></a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('dventa.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="row">

<div class="form-group col-md-3">
        {{ Form::label('id_producto', 'Producto') }}
        {{ Form::select('id_producto', $tableProducto, Request::old('id_producto'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_venta', 'Folio de venta') }}
        {{ Form::select('id_venta', $tableVenta, Request::old('id_venta'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('cantidad', 'Cantidad') }}
        {{ Form::number('cantidad', Request::old('number'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('precio', 'precio') }}
        {{ Form::number('precio', Request::old('number'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>
    

    <div class="col-md-12">
        {{ Form::submit('Registrar venta', array('class' => 'btn btn-primary')) }}
    </div>


</div>

    {{ Form::submit('Actualizar dventa', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection