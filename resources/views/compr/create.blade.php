@extends('layouts.plantillaInterna')
@section('content')

<a href="{{ URL::to('compr') }}"><button>Regresar</button></a> <br> <br>

<h1>Registro de Compra</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'compr')) }}
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
    

    <div class="col-md-12"  >
        {{ Form::submit('Registrar Compra', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection