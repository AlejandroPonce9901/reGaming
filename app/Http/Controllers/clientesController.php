<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\clientes;

class clientesController extends Controller
{
    
          public function index(Request$request){

    $whereClause = []; if($request->nombre){ 
        array_push($whereClause, [ "name" ,'like', '%'.$request->nombre.'%' ]); 
     }
     $tableclientes = clientes::orderBy('name')
     ->where($whereClause)
     ->get(); 


     if(\Auth::user()->id != 1){ 
     return view('NotAllowed');
     return view('clientes.index', ["clientes" =>  $tableclientes, "filtroNombre" => $request->nombre ]);
}

       /*<!-- $tableUsers = UserEloquent::all();*/
        return view('clientes.index', ["tableclientes" =>  $tableclientes, "filtroNombre"=>$request->nombre ]);
    }    

    
    public function create()
    {
        return view('clientes.create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'apellidoPa' => 'required|min:2|max:10',
            'apellidoMa' => 'required|min:2|max:10',
            'email' => 'required|email',           
            
        ]);

        $mClientes = new clientes();
        $mClientes->fill($request->all());
        $mClientes->save();

        Session::flash('message', 'Nuevo cliente Registrado!');
        return Redirect::to('clientes');
    }

 
    public function show($id)
    {
        $modelo = clientes::find($id);
        return view('clientes.show', ["modelo" => $modelo]);
    }

   
    public function edit($id)
    {
        $modelo = clientes::find($id);
        return view('clientes.edit', ["modelo" => $modelo]);
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'apellidoPa' => 'required|min:2|max:10',
            'apellidoMa' => 'required|min:2|max:10',
            'email' => 'required|email',           
            
        ]);

        $mClientes = clientes::find($id);
        $mClientes->name       = $request->name;
        $mClientes->apellidoPa       = $request->apellidoPa;
        $mClientes->apellidoMa       = $request->apellidoMa;
        $mClientes->email      = $request->email;
        $mClientes->updated_at = date('Y-m-d H:i:s');
        $mClientes->save();
        Session::flash('message', 'clientes Actualizado!');
        $modelo = clientes::find($id);
        return view('clientes.show', ["modelo" => $modelo]);
    }

   
    public function destroy($id)
    {
        $mClientes = clientes::find($id);
        $mClientes->delete();
        Session::flash('message', 'clientes eliminado!');
        return Redirect::to('clientes');
    }
}
