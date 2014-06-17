<?php

class EstadoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Estado = Estado::all()->toJson();
		return $Estado;
	}


	


}
