<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalleventa;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle = Detalleventa::all();
        return view('detalle.index', ["detalle" => $detalle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalle = new Detalleventa;
        return view("detalle.create", ["detalle" => $detalle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle = new Detalleventa;
        
        $detalle->nombre=$request->nombre;
        /*$categoria->user_id= Auth::user()->id;*/
        
        $detalle->save();

        if($detalle->save()){
            return redirect("/detalle");
        }else{
            return view("detalle.create");
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
        //
        $detalle = Detalleventa::find($id);
        return view("detalle.edit", ["detalle" => $detalle]);
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
        $detalle = Detalleventa::find($id);
        
        $detalle->nombre=$request->nombre;
        
        if($detalle->save()){
            return redirect("/detalle");
        }else{
            return view("detalle.edit");
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
        Detalleventa::destroy($id);

        return redirect('/detalle');
    }
}
