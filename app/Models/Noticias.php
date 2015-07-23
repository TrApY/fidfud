<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Noticias extends Model
{
    
	public $table = "noticias";
    

	public $fillable = [
	    "titulo",
		"noticia",
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
        "titulo" => "string",
		"noticia" => "string",
		"url_video" => "string",
		"imagen" => "string"
    ];

	public static $rules = [
	    "titulo" => "required",
		"noticia" => "required"
	];

	public function setImagenAttribute($value)
	{
		/**Si la imagen viene vacia, se deja como estaba*/
		if (! empty ($value)) {
			$this->attributes['imagen'] = $value;
		}
	}

}
