<?php
 
class Usuario extends Eloquent {
 
    protected $table = 'usuario_movil';

    public static $unguarded = true;
  	public $timestamps = false;
  	public $primaryKey  = 'ID_USUARIO';
 
}