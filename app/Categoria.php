<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categorias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'grupo'];


    public function restaurantes()
    {
        return $this->belongsToMany('App\Restaurantes')->withTimestamps();
    }

    public function recetas()
    {
        return $this->belongsToMany('App\Restaurantes')->withTimestamps();
    }
}
