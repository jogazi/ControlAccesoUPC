<?php

namespace App\Http\Controllers;

use App\User;
use App\audit23;
use Illuminate\Http\Request;

class Audit23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $audit23 = audit23::all();
    return view('audit23.index', ['archivos'=>$audit23]);
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
    public function store(Request $request)
    {
        $email=$request["hidden"];
        $archivo1=$_FILES['archivo1'];
        $archivo2=$_FILES['archivo2'];

        $fecha=date("Y-m-d-h-i-s");
        $nombre1=$fecha."--1--".$_FILES['archivo1']['name'];
        $guardado1=$_FILES['archivo1']['tmp_name'];
        $nombre2=$fecha."--2--".$_FILES['archivo2']['name'];
        $guardado2=$_FILES['archivo2']['tmp_name'];
        
        if(!file_exists('public/archivos')){
            mkdir('public/archivos',0777,true);
            if(file_exists('public/archivos')){
                if(move_uploaded_file($guardado1, 'public/archivos/'.$nombre1)){
                    //echo "Archivo guardado con exito";
                }else{
                    //echo "Archivo no se pudo guardar";
                }
                if(move_uploaded_file($guardado2, 'public/archivos/'.$nombre2)){
                    //echo "Archivo guardado con exito";
                }else{
                    //echo "Archivo no se pudo guardar";
                }
            }
        }else{
            if(move_uploaded_file($guardado1, 'public/archivos/'.$nombre1)){
                //echo "Archivo guardado con exito";
            }else{
                //echo "Archivo no se pudo guardar";
            }
            if(move_uploaded_file($guardado2, 'public/archivos/'.$nombre2)){
                //echo "Archivo guardado con exito";
            }else{
                //echo "Archivo no se pudo guardar";
            }
        }

        // query user data
        $user = User::where("email","=","$email")->first();
        //echo $archivo1;

        // path first file
        $route1 = 'public/archivos/'.$nombre1;

        //second file path
        $route2 = 'public/archivos/'.$nombre2;

       // echo $request["archivo1"]->name;
        $nameext1 = $archivo1["name"];
        $nameext2 = $archivo2["name"];

        // first file extension
        $extension1 = substr($nameext1, -3);
        $extension1 = strtoupper(substr($extension1, 0,1));

        // second file extension
        $extension2 = substr($nameext2, -3);
        $extension2 = strtoupper(substr($extension2, 0,1));
        

        $size1=0;
        $size2=0;

        // measurement first file
        if ($archivo1["size"]>=1024) {
            $size1=$archivo1["size"]/1024;
            $medida1="Kb";
        }else{
            $size1=$archivo1["size"];
            $medida1="Bytes";
        }
        
        if ($size1>=1024) {
            $size1=$size1/1024;
            $medida1="Mb";
        }

        if ($size1>=1024) {
            $size1=$size1/1024;
            $medida1="Gb";
        }

        // second file measurement
        if ($archivo2["size"]>=1024) {
            $size2=$archivo2["size"]/1024;
            $medida2="Kb";
        }else{
            $size2=$archivo2["size"];
            $medida2="Bytes";
        }
        
        if ($size2>=1024) {
            $size2=$size2/1024;
            $medida2="Mb";
        }

        if ($size2>=1024) {
            $size2=$size2/1024;
            $medida2="Gb";
        }

        // first file size
        $size1=round( $size1, 1, PHP_ROUND_HALF_EVEN);
        $size1=$size1." ".$medida1;

        // second file size
        $size2=round( $size2, 1, PHP_ROUND_HALF_EVEN);
        $size2=$size2." ".$medida2;


        // creating new records
        $audit23 = new audit23;
        $audit23->route1 = $route1;
        $audit23->extension1 = $extension1;
        $audit23->size1 = $size1;
        $audit23->route2 = $route2;
        $audit23->extension2 = $extension2;
        $audit23->size2 = $size2;
        $audit23->id = $user->id;
        $audit23->save();

        return view('comparacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\audit23  $audit23
     * @return \Illuminate\Http\Response
     */
    public function show(audit23 $audit23)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit23  $audit23
     * @return \Illuminate\Http\Response
     */
    public function edit(audit23 $audit23)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit23  $audit23
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit23 $audit23)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit23  $audit23
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit23 $audit23)
    {
        //
    }
}

