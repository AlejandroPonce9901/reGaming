@extends('layouts.plantillaInterna')
@section('content')

<a href="{{ URL::to('dcompra') }}">Regresar</a> <br> <br>

<h1>Registro Detalle Compra</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'dcompra')) }}
<div class="row">


    <div class="form-group col-md-3">
        {{ Form::label('id_producto', 'Producto') }}
        {{ Form::select('id_producto', $tableProducto, Request::old('id_producto'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_compr', 'Folio de Compra') }}
        {{ Form::select('id_compr', $tablecompr, Request::old('id_compr'),  
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
        {{ Form::submit('Registrar Compra', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection