<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\proveedor;

class proveedorController extends Controller
{
    public function index(Request$request){

    $whereClause = []; if($request->nombre){ 
        array_push($whereClause, [ "name" ,'like', '%'.$request->nombre.'%' ]); 
     }
     $tableProveedor = proveedor::orderBy('name')
     ->where($whereClause)
     ->get(); 


     if(\Auth::user()->roles_id != 1){ 
     return view('NotAllowed');
     return view('proveedor.index', ["tableProveedor" =>  $tableProveedor, "filtroNombre" => $request->nombre ]);
}

       /*<!-- $tableUsers = UserEloquent::all();*/
        return view('proveedor.index', ["tableProveedor" =>  $tableProveedor, "filtroNombre"=>$request->nombre ]);
    }


    public function create()
    {
        return view('proveedor.create',[ ]);
        
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'direccion' => 'required|min:2|max:40',
            'nombreContacto' => 'required|min:2|max:50',
            'codigoPostal' => 'required|min:2|max:10',
            'telefono' => 'required',
            'rfc' => 'required|min:2|max:100',
            'email' => 'required|email',           
            
        ]);

        $mProveedor = new proveedor();
        $mProveedor->fill($request->all());
        $mProveedor->save();

        Session::flash('message', 'Nuevo Proveedor Registrado!');
        return Redirect::to('proveedor');
    }


    public function show($id)
    {
        $modelo = proveedor::find($id);
        return view('proveedor.show', ["modelo" => $modelo]);
    }


    public function edit($id)
    {
        $modelo = proveedor::find($id);
        return view('proveedor.edit', ["modelo" => $modelo]);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'direccion' => 'required|min:2|max:40',
            'nombreContacto' => 'required|min:2|max:20',
            'codigoPostal' => 'required|min:2|max:10',
            'telefono' => 'required',
            'rfc' => 'required|min:2|max:100',
            'email' => 'required|email',           
            
        ]);

        $mProveedor = proveedor::find($id);
        $mProveedor->name       = $request->name;
        $mProveedor->direccion       = $request->direccion;
        $mProveedor->nombreContacto       = $request->nombreContacto;
        $mProveedor->telefono       = $request->telefono;
        $mProveedor->codigoPostal       = $request->codigoPostal;
        $mProveedor->rfc       = $request->rfc;
        $mProveedor->email      = $request->email;
        $mProveedor->updated_at = date('Y-m-d H:i:s');
        $mProveedor->save();
        Session::flash('message', 'Proveedor Actualizado!');
        $modelo = proveedor::find($id);
        return view('proveedor.show', ["modelo" => $modelo]);
    }

    


    public function destroy($id)
    {
        $mProveedor = proveedor::find($id);
        $mProveedor->delete();
        Session::flash('message', 'Proveedor mandado a chingar a su madre!');
        return Redirect::to('proveedor');
    }
}
