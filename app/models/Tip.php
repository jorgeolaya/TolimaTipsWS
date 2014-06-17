<?php
 
class Tip extends Eloquent {
 
    protected $table = 'tip';

    public static $unguarded = true;
    public $timestamps = false;

    public $primaryKey  = 'ID_TIP';
 
}