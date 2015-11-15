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

	public function restaurantes() {
		return $this->belongsToMany('\App\Models\Restaurantes', 'restaurante_categoria');
	}

    public function noticias() {
        return $this->belongsToMany('\App\Models\Noticias', 'noticia_categoria');
    }

    public function recetas() {
        return $this->belongsToMany('\App\Models\Recetas', 'receta_categoria');
    }

}
