<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Recetas extends Model
{
    
	public $table = "recetas";
    

	public $fillable = [
	    "nombre",
	    "descripcion",
		"elaboracion",
		"imagen",
		"diabetes",
		"celiaquia",
		"lactosa"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "nombre" => "string",
		"elaboracion" => "string",
		"imagen" => "string"
    ];

	public static $rules = [
		"nombre" => "required",
		"descripcion" => "required",

	];

	public function setImagenAttribute($value)
	{
		/**Si la imagen viene vacia, se deja como estaba*/
		if (! empty ($value)) {
			$this->attributes['imagen'] = $value;
		}
	}

}
