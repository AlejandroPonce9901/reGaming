<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\dcompra;
use App\Models\producto;
use App\Models\compr;

class dcompraController extends Controller
{
    
    public function index()
    {
        
        $tableDcompra = dcompra::all();
        return view('dcompra.index', ["tableDcompra" =>  $tableDcompra ]);
    }

    
    public function create()
    {
        $tablecompr = compr::orderBy('id')->get()->pluck('id','id');
        $tableProducto = producto::orderBy('nombre')->get()->pluck('nombre','id');
        return view('dcompra.create', [ 'tablecompr' => $tablecompr], ['tableProducto' => $tableProducto]);
    }

 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_compr' => 'required|exists:compr,id',
            'id_producto' => 'required|exists:producto,id',
            'cantidad' => 'required|numeric|min:0',
            'precio' => 'required|numeric|min:0',
            
        ]);

        $mdCompra = new dcompra($request->all());
        $mdCompra->save();
        Session::flash('message', 'Detalle de Compra Registrada!');
        return Redirect::to('dcompra');
    }

  
    public function show($id)
    {
        $modelo = dcompra::find($id);
        return view('dcompra.show', ["modelo" => $modelo]);
    }

    public function edit($id)
    {
        $modelo = dcompra::find($id);
        $tablecompr = compr::orderBy('id')->get()->pluck('id','id');
        $tableProducto = producto::orderBy('nombre')->get()->pluck('nombre','id');
        return view('dcompra.edit', ["modelo" => $modelo, 'tablecompr' => $tablecompr,'tableProducto' => $tableProducto]);
    
    }

   
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_compr' => 'required|exists:compr,id',
            'id_producto' => 'required|exists:producto,id',
            'cantidad' => 'required|numeric|min:0',
            'precio' => 'required|numeric|min:0',
            
        ]);

        $mdCompra = dcompra::find($id);
        $mdCompra->id_compr       = $request->id_compr;
        $mdCompra->id_producto       = $request->id_producto;
        $mdCompra->precio       = $request->precio;
        $mdCompra->cantidad       = $request->cantidad;
        
        $mdCompra->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Compra actualizada!');
        $tableDcompra = dcompra::orderBy('id')->get()->pluck('id','id');
        return view('dcompra.show', ["modelo" => $mdCompra, 'tableDcompra' => $tableDcompra]);
    }

   
    public function destroy($id)
    {
        $mdCompra = dcompra::find($id);
        $mdCompra->delete();

        Session::flash('message', 'Detalle de Compra eliminada!');
        return Redirect::to('dcompra');
    }
}
