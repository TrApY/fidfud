<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatRestaurante extends Model
{
    protected $table = 'categoria_restaurante';

    protected $fillable = ['categorias_id', 'restaurantes_id'];
}
