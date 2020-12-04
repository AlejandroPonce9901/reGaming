@extends('layouts.plantillaInterna')
@section('content')

@if(\Auth::user()->roles_id== 1 )
<a href="{{ route('productos.show', $modelo->id) }}"><button>Regresar</button></a> <br> <br>
@else
<h1>No tiene permisos de editar productos</h1>
@endif

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}
 
{{ Form::model( $modelo, array('route' => array('productos.update', $modelo->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data' )) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre del producto') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('id_proveedor', 'Proveedor') }}
        {{ Form::select('id_proveedor', $tableProveedor, Request::old('id_proveedor'),  
           array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group col-md-4">
        {{ Form::label('marca', 'Marca del Producto') }}
        {{ Form::text('marca', Request::old('marca'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('modelo', 'Modelo del Producto') }}
        {{ Form::text('modelo', Request::old('modelo'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

    <div class="form-group col-md-12">
        {{ Form::label('descripcion', 'Descripción del producto') }} 
        {{ Form::textArea('descripcion', Request::old('descripcion'),
           array('class' => 'form-control', 'required'=>true, 
           'maxlength'=> 20000, 'rows'=>2)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('precio', 'Precio MXN') }}
        {{ Form::number('precio', Request::old('precio'), 
           array('class' => 'form-control', 'required'=>true, 'step'=>'.01')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('venta', 'Disponible para venta') }} 
        {{ Form::radio('venta', 1, (Request::old('venta') ? (Request::old('venta') == 1) : ($modelo->venta == 1)  ) , array('id'=>'radioSi', 'class'=>'', 'required'=>true)) }} Sí <br>
        {{ Form::radio('venta', 0, (Request::old('venta') ? (Request::old('venta') == 0) : ($modelo->venta == 0) ), array('id'=>'radioNo', 'class'=>'', 'required'=>true)) }} No
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('cproducto_id', 'Categoría del producto') }}
        {{ Form::select('cproducto_id', $tablecProductos, Request::old('cproducto_id'),  
           array('class' => 'form-control')) }}
    </div>

     <div class="form-group col-md-4">
        {{ Form::label('cantidad', 'Existencias') }}
        {{ Form::number('cantidad', Request::old('cantidad'), 
           array('class' => 'form-control', 'required'=>true, 'step'=>'1')) }}
    </div>


    <div class="form-group col-md-4">
        {{ Form::label('imagen', 'Imagen')}} 
        {{ Form::file('imagen', ['accept'=>"image/x-png,image/gif,image/jpeg"]) }} 
    </div>

    <div class="form-group col-md-3">
    {{ Form::label('Imagen Actual:')}} 
    <img src="{{ asset('storage/'.$modelo->imgNombreFisico )}}" width="30%">
    </div>



</div>



    {{ Form::submit('Actualizar producto', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection