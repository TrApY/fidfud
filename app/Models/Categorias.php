<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Categorias extends Model
{
    
	public $table = "categorias";
    

	public $fillable = [
	    "nombre"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "nombre" => "string"
    ];

	public static $rules = [
	    "nombre" => "required|unique:categorias,nombre"
	];

}
