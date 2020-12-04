<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\roles;

class rolesController extends Controller
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

        $tableRoles = roles::all();
        return view('roles.index', ["tableRoles" =>  $tableRoles ]);
}

    public function create()
    {
        return view('roles.create',[ ]);
    }


    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100',

        ]);
 
        $mRoles = new roles($request->all());
        

        $mRoles->save();

        // Regresa a lista de productos
        Session::flash('message', 'Puesto creado!');
        return Redirect::to('roles');
    }


    public function show($id)
    {
        $modelo = roles::find($id);
        return view('roles.show', ["modelo" => $modelo]);
    }

    public function edit($id)
    {
        $modelo = roles::find($id);
        return view('roles.edit', ["modelo" => $modelo]);
    }

 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100',
        ]);

        $mRoles = roles::find($id);
        $mRoles->fill($request->all());
       

        $mRoles->save();

        Session::flash('message', 'Puesto actualizado!');
        return Redirect::to('roles');
    }

 
    public function destroy($id)
    {
        $mRoles = roles::find($id);
        $mRoles->delete();
        Session::flash('message', 'Puesto eliminado!');
        return Redirect::to('roles');
    }
}
