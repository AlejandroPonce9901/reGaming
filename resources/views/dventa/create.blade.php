@extends('layouts.plantillaInterna')
@section('content')

<a href="{{ URL::to('dventa') }}">Regresar</a> <br> <br>

<h1>Registro Detalle Compra</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'dventa')) }}
<div class="row">


    <div class="form-group col-md-3">
        {{ Form::label('id_producto', 'Producto') }}
        {{ Form::select('id_producto', $tableProducto, Request::old('id_producto'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_venta', 'Folio de Venta') }}
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
        {{ Form::submit('Registrar Venta', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection