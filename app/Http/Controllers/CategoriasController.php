<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriasController extends Controller
{

    protected $categoria;


    public function index($id)
    {
        $this->setCategoria($id);
        return view('categorias');
    }

    public function opciones($opcion)
    {
        switch ($opcion) {
            case 1:
                $this->restaurantes();
                break;
            case 2:
                $this->productos();
                break;
            case 3:
                $this->noticias();
                break;
        }
    }

    public function restaurantes()
    {
        dd("Restaurantes: ". $this->getCategoria());
    }

    public function productos()
    {
        dd("Productos: ". $this->getCategoria());
    }

    public function noticias()
    {
        dd("Noticias: ". $this->getCategoria());
    }




    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
}
