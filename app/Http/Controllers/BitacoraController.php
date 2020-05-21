<?php

namespace App\Http\Controllers;

use App\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appmovil = Bitacora::all();
        return $appmovil;
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
    public function store($temp, $hume, $soni, $radi)
    {
        date_default_timezone_set('America/Los_Angeles');
        $fecha = date("Y-m-d H:i:s");
        // creating new records
        $appmovil = new Bitacora;
        $appmovil->temp = $temp;
        $appmovil->hume = $hume;
        $appmovil->soni = $soni;
        $appmovil->radi = $radi;
        $appmovil->fecha = $fecha;
        $appmovil->save();
        echo "los datos han sido registrados";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function temporalidad($fini, $hini, $ffin, $hfin)
    {
        $fh1 = $fini . " " . $hini;
        $fh2 = $ffin . " " . $hfin;
        $appmovil = Bitacora::whereBetween('fecha', array($fh1, $fh2))->get();
        //$appmovil = Bitacora::all()->whereBetween('fecha', array($fini, $ffin));
        return $appmovil;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function edit(Bitacora $bitacora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bitacora $bitacora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bitacora $bitacora)
    {
        //
    }
}
