@extends('layouts.plantillaInterna')
@section('content')

<div >
<row>@if(\Auth::user()->roles_id== 1 )
<a href="{{route('productos.create')}}"><button>Registrar producto</button>
@else
<a>No tiene permisos de registrar productos</a>
@endif
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<a href="{{asset('reportes/productos/index.php')}}"><button style="float:right;">REPORTE</button></a>
</row>

</div>

                    

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Disponible</th>
            <th>Existencias</th>
            <th>Precio</th>
            <th>Carrito</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($tableProductos as $rowProducto)
            <tr>
            <td><a href="{{route('productos.show', $rowProducto->id)}}">{{$rowProducto->id}}</a></td>
                <td>
                    <a href="{{route('productos.show', $rowProducto->id)}}">{{$rowProducto->nombre}}</a>
                </td>
                
                <td><a href="{{route('cproducto.show', $rowProducto->cproducto_id)}}">{{$rowProducto->categoria_producto}}</a></td>
                
                <td>
                @if($rowProducto->cantidad)
                 @if($rowProducto->venta) Sí @else No @endif
                 @else 
                 No, No hay Existencias
                @endif</td>
                
                <td>
                @if($rowProducto->venta){{$rowProducto->cantidad}} @else Hay Existencias pero NO está Disponible @endif</td>
                
                <td>MXN ${{$rowProducto->precio}}</td>
                @if($rowProducto->cantidad)
                @if($rowProducto->venta)
                <td style="
    padding-right: 30px;
">
                
                    {{ Form::open(['url' => 'agregarCarrito'] ) }}
                    {{ Form::hidden('id', $rowProducto->id , array('class' => 'form-control')) }}
                    {{ Form::hidden('precio', $rowProducto->precio , array('class' => 'form-control')) }}
                    {{ Form::number('cantidad', 0 ,array('class' => 'form-control', 'required'=>true)) }} <br>
                    
                    
                     
                    {{ Form::submit('Agregar',['class' => 'btn btn-primary'] ) }}

                    {{ Form::close()}}
                    
                </td>
                
                @else
                <td style="
    padding-right: 30px;
">No está diponible para la venta
                </td>
                @endif
                @else
                <td style="
    padding-right: 30px;
">No está diponible para la venta
                </td>
                @endif

              

            </tr>
        @endforeach

    </tbody>
</table><br> <br>

<table class="table table-striped">

<thead>
        <tr>
            <th>VENDER</th>
            <th>COMPRAR</th>
            
        </tr>
    </thead>
    <tbody>
        
            <tr>
            <td>{{ Form::open(['url' => 'completarVenta'] ) }}
                    {{ Form::label('id_clientes', 'Nombre del Cliente') }}
                     {{ Form::select('id_clientes', $tableClientes, Request::old('id_clientes'),  
                    array('class' => 'form-control')) }}<br> 
                    
                    {{ Form::submit('Completar Venta',['class' => 'btn btn-success'] ) }}

                    {{ Form::close()}}
            </td>
                <td>
                {{ Form::open(['url' => 'completarCompra'] ) }}
                    {{ Form::label('id_proveedor', 'Nombre del Proveedor') }}
                     {{ Form::select('id_proveedor', $tableProveedor, Request::old('id_proveedor'),  
                    array('class' => 'form-control')) }}<br> 
                    
                    {{ Form::submit('Completar Compra',['class' => 'btn btn-success'] ) }}

                    {{ Form::close()}}
                </td>
                
            </tr>
        
    </tbody>
</table>


@endsection