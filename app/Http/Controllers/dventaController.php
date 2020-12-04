<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\dventa;
use App\Models\producto;
use App\Models\venta;

class dventaController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
     if(\Auth::user()->roles_id != 1){ 
     return view('NotAllowed');
     return view('roles.index');
    }
        $tableDventa = dventa::all();
        return view('dventa.index', ["tableDventa" =>  $tableDventa ]);
    }

    
    public function create()
    {
        $tableVenta = venta::orderBy('id')->get()->pluck('id','id');
        $tableProducto = producto::orderBy('nombre')->get()->pluck('nombre','id');
        return view('dventa.create', [ 'tableVenta' => $tableVenta], ['tableProducto' => $tableProducto]);
    
    }

  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_venta' => 'required|exists:venta,id',
            'id_producto' => 'required|exists:producto,id',
            'cantidad' => 'required|numeric|min:0',
            'precio' => 'required|numeric|min:0',
            
        ]);

        $mDventa = new dventa($request->all());
        $mDventa->save();
        Session::flash('message', 'Detalle de Venta Registrada!');
        return Redirect::to('dventa');
    
    }

    
    public function show($id)
    {
        $modelo = dventa::find($id);
        return view('dventa.show', ["modelo" => $modelo]);
    }

   
    public function edit($id)
    {
        $modelo = dventa::find($id);
        $tableVenta = venta::orderBy('id')->get()->pluck('id','id');
        $tableProducto = producto::orderBy('nombre')->get()->pluck('nombre','id');
        return view('dventa.edit', ["modelo" => $modelo, 'tableVenta' => $tableVenta,'tableProducto' => $tableProducto]);
    
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_venta' => 'required|exists:venta,id',
            'id_producto' => 'required|exists:producto,id',
            'cantidad' => 'required|numeric|min:0',
            'precio' => 'required|numeric|min:0',
            
        ]);

        $mDventa = dventa::find($id);
        $mDventa->id_venta       = $request->id_venta;
        $mDventa->id_producto       = $request->id_producto;
        $mDventa->precio       = $request->precio;
        $mDventa->cantidad       = $request->cantidad;
        
        $mDventa->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Compra actualizada!');
        $tableDventa = dventa::orderBy('id')->get()->pluck('id','id');
        return view('dventa.show', ["modelo" => $mDventa, 'tableDventa' => $tableDventa]);
    }

   
    public function destroy($id)
    {
        $mDventa = dventa::find($id);
        $mDventa->delete();

        Session::flash('message', 'Detalle de Compra eliminada!');
        return Redirect::to('dventa');
    }
}
