<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mensaje;

class mensajeController extends Controller
{

    public function index()
    {
        $tablecontactos = mensaje::all();
        return view('contactos.index', ["tablecontactos" =>  $tablecontactos ]);
    }

   
    public function create()
    {
        return view('contactos.create',[ ]);
    }

  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'asunto' => 'required|min:2|max:100',
            'problema' => 'required|min:2|max:100',
            'email' => 'required|email',             
        ]);

        $mMensaje = new mensaje($request->all());
        if($request->status){
            $mMensaje->status = true; 
        } else {
            $mMensaje->status = false;
        }

        $mMensaje->save();

        // Regresa a lista de productos
        Session::flash('message', 'Mensaje Creado');
        return Redirect::to('/');
    }

   
    public function show($id)
    {
        $modelo = mensaje::find($id);
        return view('contactos.show', ["modelo" => $modelo]);
    }

   
    public function edit($id)
    {
        $modelo = mensaje::find($id);
        return view('contactos.edit', ["modelo" => $modelo]);
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'asunto' => 'required|min:2|max:100',
            'email' => 'required|email',             
            'problema' => 'required|min:2|max:100',
        ]);

        $mMensaje = mensaje::find($id);
        $mMensaje->fill($request->all());
        if($request->status){
            $mMensaje->status = true; 
        } else {
            $mMensaje->status = false;
        }

        $mMensaje->save();

        Session::flash('message', 'Mensaje Actualizado!');
        return Redirect::to('contactos');
    }

  
    public function destroy($id)
    {
        $mMensaje = mensaje::find($id);
        $mMensaje->delete();
        Session::flash('message', 'Mensaje Eliminado');
        return Redirect::to('contactos');
    }
}
