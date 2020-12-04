<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\venta;
use App\Models\clientes;
use App\Models\dventa;


class ventaController extends Controller
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
        $tableVenta = venta::all();
        return view('venta.index', ["tableVenta" =>  $tableVenta ]);
    }

   
    public function create()
    {
        $tableClientes = clientes::orderBy('name')->get()->pluck('name','id');
        return view('venta.create', ['tableClientes' => $tableClientes]);
    
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_clientes' => 'required|exists:clientes,id',
            'total' => 'required',
        ]);

        $mVenta = new venta($request->all());
        $mVenta->save();
        Session::flash('message', 'Venta Registrada!');
        return Redirect::to('venta');
    }

  
    public function show($id)
    {
        $modelo = venta::find($id);
        $detalles = dventa::where("id_venta",$id)->get();
        return view('venta.show', ["modelo" => $modelo, 'detalles' => $detalles,]);
    }

  
    public function edit($id)
    {
        $modelo = venta::find($id);
        $tableClientes = clientes::orderBy('name')->get()->pluck('name','id');
        return view('venta.edit', ["modelo" => $modelo,'tableClientes' => $tableClientes]);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            
            'id_clientes' => 'required|exists:clientes,id',
            'total'=>'required',
            
            
        ]);

        $mVenta = venta::find($id);
       
        $mVenta->id_clientes       = $request->id_clientes;
        $mVenta->total       = $request->total;
        
        $mVenta->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Venta actualizada!');
        $tableVenta = venta::orderBy('id')->get()->pluck('id','id');
        return view('venta.show', ["modelo" => $mVenta, 'tableVenta' => $tableVenta]);
    
    }

  
    public function destroy($id)
    {
        $mVenta = venta::find($id);
        $mVenta->delete();

        Session::flash('message', 'Venta eliminada!');
        return Redirect::to('venta');
    }
}
