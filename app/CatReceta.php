<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatReceta extends Model
{
    protected $table = 'categoria_receta';

    protected $fillable = ['categorias_id', 'recetas_id'];
}
