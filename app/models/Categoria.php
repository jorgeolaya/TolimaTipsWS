<?php
 
class Categoria extends Eloquent {
 
    protected $table = 'categoria';

    public static $unguarded = true;
    public $timestamps = false;
 
}