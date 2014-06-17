<?php

class TipController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		

		$tip = DB::table('tip')->orderBy('FECHA_CREACION', 'desc')->get();
		return $tip;
 	
    
	}

	public function show($id)
	{
		$tip = Tip::where('ID_USUARIO',"=", $id)->orderBy('FECHA_CREACION', 'desc')->get();
		return $tip;
  
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function store()
	{


		$tip = new Tip;
    	$tip->ID_CATEGORIA = Input::get('ID_CATEGORIA');
    	$tip->ID_ESTADO = Input::get('ID_ESTADO');
    	$tip->ID_USUARIO = Input::get('ID_USUARIO');
    	$tip->ID_MUNICIPIO = Input::get('ID_MUNICIPIO');
    	$tip->TITULO = Input::get('TITULO');
    	$tip->DESCRIPCION = Input::get('DESCRIPCION');    	
    	$tip->URL_VIDEO = Input::get('URL_VIDEO');
    	$tip->PUNTUACION = Input::get('PUNTUACION');
    	$tip->LATITUD = Input::get('LATITUD');
    	$tip->LONGITUD = Input::get('LONGITUD');
    	$tip->FECHA_CREACION = date("Y-m-d h:i:s");
    	$tip->ESTADO = '1';



    	$tip->save();
    	

	}


	public function update($id)
	{
		$tip = Tip::where('ID_USUARIO', $id)->first();



		$tip->TITULO = Request::get('TITULO');
    	$tip->DESCRIPCION = Request::get('DESCRIPCION');    	
    	$tip->URL_VIDEO = Request::get('URL_VIDEO');
    	$tip->PUNTUACION = Request::get('PUNTUACION');

    	$tip->save();


	}

	



}
