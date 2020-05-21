<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\audit07;
use App\audit08;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function audit($act, $cntr, $id, $douser) {

        $act = strtoupper($act);
        $var = explode(",", $cntr);
        if ($var[0]=="Login") {
            $douser = $var[1] . " " .$douser;
            $cntr = $var[0];
        }

        if ($act=="C") {
            $mthd = "Create";
        }elseif ($act=="R") {
            $mthd = "Read";
        }elseif ($act=="U") {
            $mthd = "Update";
        }elseif ($act=="D") {
            $mthd = "Delete";
        }

        date_default_timezone_set('America/Los_Angeles');
        $fecha = date("Y-m-d H:i:s");

        $ipuser = $_SERVER['HTTP_X_FORWARDED_FOR'];

        // creating new records
        $audit07 = new audit07;
        $audit07->sys_act = $act;
        $audit07->sys_date = $fecha;
        $audit07->iduser = $id;
        $audit07->save();

        $idaudit07 = audit07::all()->last();

        // creating new records
        $audit08 = new audit08;
        $audit08->idsys = $idaudit07->id_sys;
        $audit08->dsyscontroller = $cntr;
        $audit08->dsysmethod = $douser;
        $audit08->dsysip = $ipuser;
        $audit08->save();
    }
}
