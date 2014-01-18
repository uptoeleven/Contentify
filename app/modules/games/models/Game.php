<?php namespace App\Modules\Games\Models;

use Ardent;

class Game extends Ardent {

    protected $softDelete = true;

    protected $fillable = array('title', 'short');

    public static $fileHandling = array('icon' => ['type' => 'image']);

    public static $rules = array(
        'title'     => 'required',
        'short'     => 'required',
    );

}