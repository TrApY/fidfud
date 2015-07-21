<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'restaurantes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre',
        'telefono',
        'tipo_cocina',
        'direccion',
        'otra_informacion',
        'imagen',
        'ruta_imagen'
    ];

    public function categoria()
    {
        return $this->belongsToMany('App\Categoria', 'categoria_restaurante', 'restaurantes_id', 'categorias_id')->withTimestamps();
    }
}
