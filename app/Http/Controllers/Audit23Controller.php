<?php

namespace App\Http\Controllers;

use App\User;
use App\audit23;
use App\audit24;
use App\audit25;
use Alert;
use Auth;

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
        $userauth = Auth::user()->id;
        $roles = Auth::user()->roles;   
        $super=0;
        foreach ($roles as $valor) {
            $id = $valor->id;
            if ($id=="1" || $id=="3") {
                $super=1;
            }
        }
        
        if ($super==1) {
            $audit23 = audit23::where("state","=","A")->paginate(4);
        }else {
            $audit23 = audit23::where([
            ["state","=","A"],
            ["id","=","$userauth"],
            ])->paginate(4);
        }
        return view('audit23.index', compact('audit23'));

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
        $audit = new Controller;
        $audit->audit("C", "Audit23", Auth::user()->id, "Create file comparisons");

        $email=$request["hidden"];
        $archivo1=$_FILES['archivo1'];
        $archivo2=$_FILES['archivo2'];

        $fecha=date("Y-m-d-h-i-s");
        $nombre1=$fecha."--1--".$_FILES['archivo1']['name'];
        $guardado1=$_FILES['archivo1']['tmp_name'];
        $nombre2=$fecha."--2--".$_FILES['archivo2']['name'];
        $guardado2=$_FILES['archivo2']['tmp_name'];
        $routeinicial='public/archivos/';

        if(!file_exists($routeinicial)){
            mkdir($routeinicial,0777,true);
            if(file_exists($routeinicial)){
                if(move_uploaded_file($guardado1, $routeinicial.''.$nombre1)){
                    //echo "Archivo guardado con exito";
                }else{
                    //echo "Archivo no se pudo guardar";
                }
                if(move_uploaded_file($guardado2, $routeinicial.''.$nombre2)){
                    //echo "Archivo guardado con exito";
                }else{
                    //echo "Archivo no se pudo guardar";
                }
            }
        }else{
            if(move_uploaded_file($guardado1, $routeinicial.''.$nombre1)){
                //echo "Archivo guardado con exito";
            }else{
                //echo "Archivo no se pudo guardar";
            }
            if(move_uploaded_file($guardado2, $routeinicial.''.$nombre2)){
                //echo "Archivo guardado con exito";
            }else{
                //echo "Archivo no se pudo guardar";
            }
        }

        // query user data
        $user = User::where("email","=","$email")->first();
        //echo $archivo1;

        // path first file
        $route1 = $routeinicial.''.$nombre1;

        //second file path
        $route2 =  $routeinicial.''.$nombre2;

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

        // diffsize and detdiffsize
        if ($archivo1["size"]!=$archivo2["size"]) {
            $diffsize="Y";
            $detdiffsize="Files are not the same size";
        }else {
            $diffsize="N";
            $detdiffsize="Files are the same size";
        }

        //file content 1
        $fileContent1 = file_get_contents($route1);
        $rows1        = explode("\n",$fileContent1);
        $title1 = explode(";",$rows1[0]);
        $numRows1     = count($rows1);
        
        if ($extension1=="C") {
            $numRows1  = $numRows1-1;
        }

        $detnumRows1  = $numRows1-1;
        //echo $numRows1;
        //print_r($fileContent1);

        //file content 2
        $fileContent2 = file_get_contents($route2);
        $rows2        = explode("\n",$fileContent2);
        $title2 = explode(";",$rows2[0]);
        $numRows2     = count($rows2);

        if ($extension1=="C") {
            $numRows2  = $numRows2-1;
        }

        $detnumRows2  = $numRows2-1;
        //echo $numRows2;
        //print_r($fileContent2);

        $contentdiff=" ";
        if ($numRows1==$numRows2) {
            $diffinfo = "N";
            $detdiffinfo = "Files have the same number of rows " . $detnumRows2 . " and the information is the same" ;

            for($i=0;$i<$numRows1;$i++){
                //echo $i;
                $cols1 = explode(";",$rows1[$i]);
                $numCols1= count($cols1);
                //print_r($cols1);
                $cols2 = explode(";",$rows2[$i]);
                $numCols2 = count($cols2);
                //print_r($cols2);

                for($j=0;$j<$numCols1;$j++){
                    //echo $cols1[$j];
                    //print_r($cols1[$j]);
                    //echo $cols2[$j];
                    //print_r($cols2[$j]);

                    if ($cols1[$j]!=$cols2[$j]) {
                        $diffinfo = "Y";
                        $detdiffinfo = "Files have the same number of rows " . $detnumRows2 . " and the information is not the same" ;
                        $contentdiff .= " the information is not the same, in row " . $i . " of file 1 the " . $title1[$j] . " is " . $cols1[$j] . " and in file 2 the " . $title2[$j] . " is " . $cols2[$j] ;
                    }
                }
            }
        }else {
            $diffinfo = "Y";
            $detdiffinfo = "The files do not have the same number of rows and the information is not the same, file 1 has " . $detnumRows1 . " rows and file 2 has " . $detnumRows2 . " rows";

            if ($numRows1>$numRows2) {
                $less   = $numRows2;
                $higher = $numRows1;
                $act    =1;
            } else {
                $less   = $numRows1;
                $higher = $numRows2;
                $act    =2;
            }
            
            for($i=0;$i<$less;$i++){
                //echo $i;
                $cols1 = explode(";",$rows1[$i]);
                $numCols1= count($cols1);
                //print_r($cols1);
                $cols2 = explode(";",$rows2[$i]);
                $numCols2 = count($cols2);
                //print_r($cols2);

                for($j=0;$j<$numCols1;$j++){
                    //echo $cols1[$j];
                    //print_r($cols1[$j]);
                    //echo $cols2[$j];
                    //print_r($cols2[$j]);

                    if ($cols1[$j]!=$cols2[$j]) {
                        $contentdiff .= " the information is not the same, in row " . $i . " of file 1 the " . $title1[$j] . " is " . $cols1[$j] . " and in file 2 the " . $title2[$j] . " is " . $cols2[$j] ;
                    }
                }
            }

            //difference records second part
            for($i=$less;$i<$higher;$i++){
                //echo $i;
                if ($act==1) {
                    $cols = explode(";",$rows1[$i]);
                    $numCols= count($cols);
                } else {
                    $cols = explode(";",$rows2[$i]);
                    $numCols = count($cols);
                }
                //print_r($cols);

                for($j=0;$j<$numCols;$j++){
                    if ($act==1) {
                        $contentdiff .= " the information is not the same, in row " . $i . " of file 1 the " . $title1[$j] . " is " . $cols[$j] . " and in file 2 the " . $title2[$j] . " is 'no data'" ;
                    } else {
                        $contentdiff .= " the information is not the same, in row " . $i . " of file 1 the " . $title1[$j] . " is 'no data' and in file 2 the " . $title2[$j] . " is " . $cols[$j] ;
                    }
                }
            }
        }

        $detdiffinfo = $detdiffinfo . " " . $contentdiff;

        // creating new records
        $audit23 = new audit23;
        $audit23->route1 = $route1;
        $audit23->extension1 = $extension1;
        $audit23->size1 = $size1;
        $audit23->route2 = $route2;
        $audit23->extension2 = $extension2;
        $audit23->size2 = $size2;
        $audit23->diffsize = $diffsize;
        $audit23->detdiffsize = $detdiffsize;
        $audit23->diffinfo = $diffinfo;
        $audit23->detdiffinfo = $detdiffinfo;
        $audit23->id = $user->id;
        $audit23->save();

        $idaudit23 = audit23::all()->last();

        //tour file 1 and record in database
        for($i=0;$i<$numRows1;$i++){
            //echo $i;
            $cols1 = explode(";",$rows1[$i]);
            //print_r($cols1);

            // creating new records
            $audit24 = new audit24;
            $audit24->codigo    = $cols1[0];
            $audit24->nombre    = $cols1[1];
            $audit24->nofactura = $cols1[2];
            $audit24->valor     = $cols1[3];
            $audit24->concepto  = $cols1[4];
            $audit24->idfile    = $idaudit23->idfile;
            $audit24->save();
        }


        //tour file 2 and record in database
        for($i=0;$i<$numRows2;$i++){
            //echo $i;
            $cols2 = explode(";",$rows2[$i]);
            //print_r($cols2);

            // creating new records
            $audit25 = new audit25;
            $audit25->codigo    = $cols2[0];
            $audit25->nombre    = $cols2[1];
            $audit25->nofactura = $cols2[2];
            $audit25->valor     = $cols2[3];
            $audit25->concepto  = $cols2[4];
            $audit25->idfile    = $idaudit23->idfile;
            $audit25->save();
        }

        $audit23 = audit23::all()->last();
        Alert::success('Success', 'Comparation Successfully');
        return view('audit23.show', compact('audit23'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\audit23  $audit23
     * @return \Illuminate\Http\Response
     */
    public function show(audit23 $audit23)
    {
        $audit = new Controller;
        $audit->audit("R", "Audit23", Auth::user()->id, "Show");
        return view('audit23.show', compact('audit23'));
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
        $audit = new Controller;
        $audit->audit("U", "Audit23", Auth::user()->id, "Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit23  $audit23
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit23 $audit23)
    {
        $audit = new Controller;
        $userauth = Auth::user()->id;
        $roles = Auth::user()->roles;   
        $super=0;
        foreach ($roles as $valor) {
            $id = $valor->id;
            if ($id=="1" || $id=="3") {
                $super=1;
            }
        }
        
        if ($super==1) {
            $audit->audit("D", "Audit23", Auth::user()->id, "Destroy for super admin file comparisons $audit23->idfile");
            //delete registry and delete files from server
            unlink($audit23->route1);
            unlink($audit23->route2);
            $audit23->delete();
        }else {
            $audit->audit("D", "Audit23", Auth::user()->id, "Destroy, Change Status file comparisons $audit23->idfile");
            $audit23->state = "R";
            $audit23->save();
        }

        Alert::success('Success', 'Files Compared Successfully Deleted');
        return back();
    }

    
    function imprimir() {
        $audit = new Controller;
        $userauth = Auth::user()->id;
        $roles = Auth::user()->roles;   
        $super=0;
        foreach ($roles as $valor) {
            $id = $valor->id;
            if ($id=="1" || $id=="3") {
                $super=1;
            }
        }
        
        if ($super==1) {
            $audit23 = audit23::all()->where("state","=","A");
            $audit->audit("R", "Audit23", Auth::user()->id, "Read, for super admin file comparisons report pdf ");
        }else {
            $audit23 = audit23::where([
            ["state","=","A"],
            ["id","=","$userauth"],
            ])->paginate(4);
            $audit->audit("R", "Audit23", Auth::user()->id, "Read, report pdf file comparisons ");
        }
        $pdf = \PDF::loadView('audit23.pdf', compact('audit23'));
        return $pdf->download('files-scanned.pdf');
    }
}

