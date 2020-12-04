<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\compr;
use App\Models\proveedor;

class comprController extends Controller
{
    public function index()
    {
        $tableCompr = compr::all();
        return view('compr.index', ["tableCompr" =>  $tableCompr ]);
    }

  
    public function create()
    {
        $tableProveedor = proveedor::orderBy('name')->get()->pluck('name','id');
        return view('compr.create', ['tableProveedor' => $tableProveedor]);
    
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_proveedor' => 'required|exists:proveedor,id',
            'total'=>'required',
        ]);

        $mCompr = new compr($request->all());
        $mCompr->save();
        Session::flash('message', 'Compra Registrada!');
        return Redirect::to('compr');
    }

  
    public function show($id)
    {
        $modelo = compr::find($id);
        return view('compr.show', ["modelo" => $modelo]);
    }

  
    public function edit($id)
    {
        $modelo = compr::find($id);
        $tableProveedor = proveedor::orderBy('name')->get()->pluck('name','id');
        return view('compr.edit', ["modelo" => $modelo,'tableProveedor' => $tableProveedor]);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            
            'id_proveedor' => 'required|exists:proveedor,id',
            'total'=>'required',
            
            
        ]);

        $mCompr = compr::find($id);
       
        $mCompr->id_proveedor       = $request->id_proveedor;
        $mCompr->total       = $request->total;
        
        $mCompr->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Compra actualizada!');
        $tableCompr = compr::orderBy('id')->get()->pluck('id','id');
        return view('compr.show', ["modelo" => $mCompr, 'tableCompr' => $tableCompr]);
    
    }

  
    public function destroy($id)
    {
        $mCompr = compr::find($id);
        $mCompr->delete();

        Session::flash('message', 'Compra eliminada!');
        return Redirect::to('compr');
    }
}
