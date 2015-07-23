<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Recetas extends Model
{
    
	public $table = "recetas";
    

	public $fillable = [
	    "nombre",
		"elaboracion",
		"ingredientes",
		"tiempo_elaboracion",
		"url_video",
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
		"ingredientes" => "string",
		"tiempo_elaboracion" => "string",
		"url_video" => "string",
		"imagen" => "string"
    ];

	public static $rules = [
	    "nombre" => "required"
	];

	public function setImagenAttribute($value)
	{
		/**Si la imagen viene vacia, se deja como estaba*/
		if (! empty ($value)) {
			$this->attributes['imagen'] = $value;
		}
	}

}
