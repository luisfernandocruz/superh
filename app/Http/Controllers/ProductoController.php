<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Proveedor;
use App\categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        return view('producto.index', ["producto" => $producto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto;
        $proveedor=Proveedor::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $categoria=Categoria::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        return view("producto.create", ["producto" => $producto])->with('proveedores', $proveedor)->with('categorias', $categoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $producto = new Producto;
        
        $producto->nombre=$request->nombre;
        /*$categoria->user_id= Auth::user()->id;*/
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cantidad;
        $producto->tipo_cantidad=$request->tipo_cantidad;
        $producto->proveedor_id=$request->proveedor_id;
        $producto->categoria_id=$request->categoria_id;
        
        $producto->save();

        if($producto->save()){
            return redirect("/producto");
        }else{
            return view("producto.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = new Producto;
        $proveedor=Proveedor::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        return view("producto.create", ["producto" => $producto])->with('nombre', $proveedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $producto = Producto::find($id);
        
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cantidad;
        $producto->tipo_cantidad=$request->tipo_cantidad;
        $producto->proveedor_id=$request->proveedor_id;
        $producto->categoria_id=$request->categoria_id;
        
        if($producto->save()){
            return redirect("/producto");
        }else{
            return view("producto.edit");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Producto::destroy($id);

        return redirect('/producto');
    }
}
