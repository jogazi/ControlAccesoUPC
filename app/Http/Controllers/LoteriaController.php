<?php

namespace App\Http\Controllers;

use App\Loteria;
use Illuminate\Http\Request;

class LoteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($fila1, $fila2, $fila3, $carton)
    {
        date_default_timezone_set('America/Bogota');
        $fecha = date("Y-m-d h:m:s");
        // creating new records
        $loteria = new Loteria;
        $loteria->f1 = $fila1;
        $loteria->f2 = $fila2;
        $loteria->f3 = $fila3;
        $loteria->carton = $carton;
        $loteria->fecha = $fecha;
        $loteria->save();
        echo "los datos han sido registrados";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loteria  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function edit(Loteria $bitacora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loteria  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loteria $bitacora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loteria  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loteria $bitacora)
    {
        //
    }
}
