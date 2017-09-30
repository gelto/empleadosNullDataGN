<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use App\Empleado;

class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alta()
    {	
        return view('alta');
    }

    public function altaEmpleadoPost(Request $request){

    	$respuesta['status'] = "error";
      	$respuesta['clase'] = "input";

    	$datos = $request->all();
    	$vars = $datos['vars'];

    	$nombre = $vars['nombre'];
    	$email = $vars['email'];
    	
    	// cambio de formato de fecha
    	$fechaAux = $vars['fecha'];
    	$fechaArr = explode("/", $fechaAux);
    	$fecha = $fechaArr[2] . "-" . $fechaArr[1] . "-" . $fechaArr[0];

    	$lat = $vars['lat'];
    	$lon = $vars['lon'];

	    $rules = array(
		    'nombre' => 'required',
		    'email'  => array('required', 'email'),
		    'fecha' => array('required', 'min:10', 'max:10')
	    );
	    
	    $validation = Validator::make($vars, $rules);

	    if (!$validation->fails()) {
	    	$empleado = new Empleado();
	    	$empleado->nombre = $nombre;
	    	$empleado->email = $email;
	    	$empleado->fechaNacimiento = $fecha;
	    	$empleado->lat = $lat;
	    	$empleado->lon = $lon;

	    	$empleado->save();

	    	$respuesta['status'] = "ok";
      		$respuesta['clase'] = "";
	    }else{
	    	var_dump($validation->errors());
	    	return Redirect::to("/");
	    }

	    echo json_encode($respuesta, 1);
	}
  
}