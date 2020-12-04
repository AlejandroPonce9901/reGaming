@extends('layouts.plantillaInterna')
@section('content')

<a href="{{ URL::to('venta') }}"><button>Regresar</button></a> <br> <br>

<h1>Registro de Venta</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'venta')) }}
<div class="row">


    <div class="form-group col-md-3">
        {{ Form::label('id_clientes', 'Nombre Cliente') }}
        {{ Form::select('id_clientes', $tableClientes, Request::old('id_clientes'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('total', 'total') }}
        {{ Form::number('total', Request::old('number'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>


    

    <div class="col-md-12">
        {{ Form::submit('Registrar Venta', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection