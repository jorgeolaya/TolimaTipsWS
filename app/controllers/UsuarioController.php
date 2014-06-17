<?php

class UsuarioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuario = Usuario::all()->toJson();
		return $usuario;
 	
    
	}

	public function show($correo)
	{

		$usuario = Usuario::where('CORREO',"=", $correo)->first();
		if($usuario!=null)
		{
			return $usuario;

		}else{
			$Usuario = new Usuario;
    		$Usuario->CORREO = $correo;
    		$Usuario->FECHA_CREACION = date("Y-m-d h:i:s");
    		$Usuario->ESTADO = '1'; 
    		$Usuario->save();
    		$usuario = Usuario::where('CORREO',"=", $correo)->first();
    		return $usuario;
		}
  
	}


	public function update($correo)
	{
		$usuario = Usuario::where('CORREO',"=", $correo)->first();



		$usuario->NOMBRE = Request::get('NOMBRE');
    	

    	$usuario->save();


	}

	



}
