<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\cProducto;
use App\Models\venta;
use App\Models\dventa;
use App\Models\clientes;
use App\Models\proveedor;
use App\Models\compr;
use App\Models\dcompra;

class ProductoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }


    public function index(){


        
        $tableUsers = DB::table('producto')
        ->join('cproducto', 'producto.cproducto_id', '=', 'cproducto.id')
        ->select('producto.*', 'cproducto.nombre as categoria_producto')
        ->get();
        $tableClientes = clientes::orderBy('name')->get()->pluck('name','id');
        $tableProveedor = proveedor::orderBy('name')->get()->pluck('name','id');
        return view('productos.index', ["tableProductos" =>  $tableUsers, 'tableClientes' => $tableClientes, 'tableProveedor' => $tableProveedor ]);
    }

    public function create()
    {
        $tablecProductos = cProducto::orderBy('nombre')->get()->pluck('nombre','id');
        $tableProveedor = proveedor::orderBy('name')->get()->pluck('name','id');
        return view('productos.create',[ 'tablecProductos' => $tablecProductos, 'tableProveedor' => $tableProveedor]);
    }

    public function store(Request $request)
    {

        // De forma automática regresa a la pantalla de origen creando una variable llamada $errors
        // la cual contiene las validaciones realizadas
        $validatedData = $request->validate([
            'nombre' => 'required|min:1|max:100',
            'cproducto_id' => 'required|exists:cproducto,id',
            'descripcion' => 'required|min:1|max:20000',
            'precio' => 'required|numeric|min:0',
            'marca' => 'required|min:1|max:100',
            'modelo' => 'required|min:1|max:100',
            'venta' => 'required',
            'cantidad' => 'required',
            'id_proveedor' => 'required',

        ]);
 
        $mProducto = new Producto($request->all());
        $mProducto->save();
        
        $file = $request->file('imagen');
if($file){
$imgNombreVirtual = $file->getClientOriginalName();
$imgNombreFisico = $mProducto->id.'-'.$imgNombreVirtual;
\Storage::disk('local')->put($imgNombreFisico, \File::get($file));
$mProducto->imgNombreVirtual = $imgNombreVirtual;
$mProducto->imgNombreFisico = $imgNombreFisico;
$mProducto->save();
}

        // Regresa a lista de producto
        Session::flash('message', 'Producto creado!');
        return Redirect::to('productos');
    }

    public function show($id)
    {
        $modelo = Producto::find($id);
        return view('productos.show', ["modelo" => $modelo]);
    }

    public function edit($id)
    {
        $modelo = Producto::find($id);
        $tablecProductos = cProducto::orderBy('nombre')->get()->pluck('nombre','id');
        $tableProveedor = proveedor::orderBy('name')->get()->pluck('name','id');
        
        return view('productos.edit', ["modelo" => $modelo, 'tablecProductos' => $tablecProductos, 'tableProveedor'=>$tableProveedor]);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:1|max:100',
            'cproducto_id' => 'required|exists:cproducto,id',
            
            'descripcion' => 'required|min:1|max:20000',
            'precio' => 'required|numeric|min:0',
            'marca' => 'required|min:1|max:100',
            'modelo' => 'required|min:1|max:100',
            'venta' => 'required',
            'cantidad' => 'required',
            'id_proveedor'=>'required',

            

    
            
        ]);

        $mProducto = Producto::find($id);
        $mProducto->nombre       = $request->nombre;
        $mProducto->cproducto_id       = $request->cproducto_id;
        $mProducto->descripcion       = $request->descripcion;
        $mProducto->precio       = $request->precio;
        $mProducto->marca       = $request->marca;
        $mProducto->modelo       = $request->modelo;
        $mProducto->venta       = $request->venta;
        $mProducto->cantidad    =$request->cantidad;
        $mProducto->id_proveedor    =$request->id_proveedor;

        $mProducto->save();

        $file = $request->file('imagen');
        if($file){
        $imgNombreVirtual = $file->getClientOriginalName();
        $imgNombreFisico = $mProducto->id.'-'.$imgNombreVirtual;
        \Storage::disk('local')->put($imgNombreFisico, \File::get($file));
        $mProducto->imgNombreVirtual = $imgNombreVirtual;
        $mProducto->imgNombreFisico = $imgNombreFisico;
        $mProducto->save();
        }

        Session::flash('message', 'Producto actualizado!');
        return Redirect::to('productos');
        
    }

    public function destroy($id)
    {
        $mProducto = Producto::find($id);
        $mProducto->delete();
        Session::flash('message', 'Producto eliminado!');
        return Redirect::to('productos');
    }

    public function agregarCarrito(Request $request) {
        $carrito = $request->session()->get('carrito');
            if(!$carrito){
                $carrito = [];
            }

        array_push($carrito, [
            'id' => $request->id,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            
        ]);

        $request->session()->put('carrito', $carrito);
            Session::flash('message', 'Producto agregado!');
            return Redirect::to('productos');
        }

    public function completarVenta(Request $request) {
        $idc = $request->id_clientes;

        $carrito = $request->session()->get('carrito');
            if(!$carrito){
            $carrito = [];
        }

        
        $total=0; 
        $venta= new venta();
        $venta->id_clientes=$idc;
        $venta->save();
        

        foreach($carrito as $row){
            $total+=(intval($row["cantidad"])*intval($row["precio"]));
            $detalle= new dventa();
            $detalle->id_producto=$row["id"];
            $detalle->id_venta=$venta->id;
            $detalle->cantidad=$row["cantidad"];
            $detalle->precio=$row["precio"];
            $detalle->save();
            
        }

        $venta->total=$total;
        $venta->save();

        


        $request->session()->put('carrito', []);
        Session::flash('message', 'Venta Guardada!');
        return Redirect::to('productos');


        }




        public function completarCompra(Request $request) {
            $idp = $request->id_proveedor;
    
            $carrito = $request->session()->get('carrito');
                if(!$carrito){
                $carrito = [];
            }
    
            
            $total=0; 
            $compr= new compr();
            $compr->id_proveedor=$idp;
            $compr->save();
            
    
            foreach($carrito as $row){
                $total+=(intval($row["cantidad"])*intval($row["precio"]));
                $detallep= new dcompra();
                $detallep->id_producto=$row["id"];
                $detallep->id_compr=$compr->id;
                $detallep->cantidad=$row["cantidad"];
                $detallep->precio=$row["precio"];
                $detallep->save();
                
            }
    
            $compr->total=$total;
            $compr->save();
    
            
    
    
            $request->session()->put('carrito', []);
            Session::flash('message', 'Compra Guardada!');
            return Redirect::to('productos');
    
    
            }

}