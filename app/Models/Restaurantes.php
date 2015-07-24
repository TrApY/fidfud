<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Restaurantes extends Model
{
    
	public $table = "restaurantes";
    

	public $fillable = [
	    "nombre",
		"tipo_cocina",
		"direccion",
		"telefono",
		"imagen",
		"diabetes",
		"celiaquia",
		"lactosa",
		"informacion"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "nombre" => "string",
		"tipo_cocina" => "string",
		"direccion" => "string",
		"telefono" => "string",
        "imagen" => "string",

    ];

	public static $rules = [
        "nombre" => "required|unique:restaurantes,nombre",
	];

    public function setImagenAttribute($value)
    {
        /**Si la imagen viene vacia, se deja como estaba*/
        if (! empty ($value)) {
            $this->attributes['imagen'] = $value;
        }
    }

}
