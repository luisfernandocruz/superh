<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use App\User;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();
        return view('venta.index', ["venta" => $ventas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venta = new Venta;
        $user=User::orderBy('name', 'ASC')->pluck('name', 'id');
        return view("venta.create", ["venta" => $venta])->with('users', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta = new Venta;
        
        $venta->usuario_id=$request->usuario_id;
        /*$categoria->user_id= Auth::user()->id;*/
        
        $venta->save();

        if($venta->save()){
            return redirect("/venta");
        }else{
            return view("venta.create");
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
        $venta = Venta::find($id);
        return view("venta.edit", ["venta" => $venta]);
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
        $venta = Venta::find($id);
        
        $venta->usuario_id=$request->usuario_id;
        
        if($venta->save()){
            return redirect("/venta");
        }else{
            return view("venta.edit");
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
        Venta::destroy($id);

        return redirect('/venta');
    }
}