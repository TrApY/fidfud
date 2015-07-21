<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recetas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'elaboracion',
        'ingredientes',
        'tiempo_elaboracion',
        'url_video',
        'imagen',
        'ruta_imagen'
    ];

    public function categoria()
    {
        return $this->belongsToMany('App\Categoria', 'categoria_receta', 'recetas_id', 'categorias_id')->withTimestamps();
    }
}
