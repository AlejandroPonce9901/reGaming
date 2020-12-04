@extends('layouts.plantillaInterna')
@section('content')

<a href="{{ URL::to('clientes') }}"><button>Regresar</button>></a> <br> <br>

<h1>Registrar un nuevo Cliente</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'clientes')) }}
<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('name', 'Nombre') }}
        {{ Form::text('name', Request::old('name'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('apellidoPa', 'Apellido Paterno') }}
        {{ Form::text('apellidoPa', Request::old('apellidoPa'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('apellidoMa', 'Apellido Materno') }}
        {{ Form::text('apellidoMa', Request::old('apellidoMa'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('email', 'Correo electrónico') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

  

    
        {{ Form::submit('Registrar Cliente', array('class' => 'btn btn-primary')) }}
    

</div>

{{ Form::close() }}


@endsection