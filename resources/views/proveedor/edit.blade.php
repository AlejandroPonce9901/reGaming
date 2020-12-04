@extends('layouts.plantillaInterna')
@section('content')

<a href="{{ route('proveedor.show', $modelo->id) }}"><button>Regresar</button></a> <br> <br>

<h1>Modificar un Proveedor</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('proveedor.update', $modelo->id, ), 'method' => 'PUT', 'enctype' => 'multipart/form-data') ) }}

<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('name', 'Nombre de la Empresa') }}
        {{ Form::text('name', Request::old('name'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('direccion', 'Dirección de la Empresa') }}
        {{ Form::text('direccion', Request::old('direccion'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('nombreContacto', 'Nombre de Personad de Contacto') }}
        {{ Form::text('nombreContacto', Request::old('nombreContacto'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('telefono', 'Teléfono') }}
        {{ Form::number('telefono', Request::old('number'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('codigoPostal', 'Código Postal') }}
        {{ Form::text('codigoPostal', Request::old('codigoPostal'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>    

    <div class="form-group col-md-4">
        {{ Form::label('rfc', 'RFC') }}
        {{ Form::text('rfc', Request::old('rfc'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div> 

    <div class="form-group col-md-4">
        {{ Form::label('email', 'Correo electrónico') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    

</div>

    {{ Form::submit('Actualizar proveedor', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection