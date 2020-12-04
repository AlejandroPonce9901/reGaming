<?php

namespace App\Http\Controllers;


use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\cProducto;

class siteController extends Controller
{
    public function index(){
        
        $tablecProductos = Producto::orderBy('nombre')->get();
        return view('welcome',[ 'tablecProductos' => $tablecProductos]);
    
    }
}
