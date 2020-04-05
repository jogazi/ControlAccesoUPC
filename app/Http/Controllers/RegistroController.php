<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function register(Request $request){

        //Recoger los datos del usuario por post
        $json = $request->input('json',null);
        $params = json_decode($json); //Objeto
        $params_array = json_decode($json,true); //Array

        // validar datos
        $validate = \Validator::make($params_array,[
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validate->fails()){
                $data = array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => 'El usuario no se ha creado',
                    'errors' => $validate->errors()
                );
            
        }else{
                $data = array(
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'El usuario se ha creado correctamente'
                );
        }
        
        //Cifrar la contraseña 

        //Comprobar si el usuario exite (Duplicado)

        //Crear usuario


        return response()->json($data, $data['code']);
    }

    public function login(Request $request){
        return "Accion de login de usuarios "
    }
}
