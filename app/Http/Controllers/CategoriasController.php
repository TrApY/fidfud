<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriasController extends Controller
{
    /**
     * @var
     */
    private $request;


    /**
     * CategoriasController constructor.
     */
    public function __construct(Request $request)
    {

        $this->request = $request;
    }

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
                $this->recetas();
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

    public function recetas()
    {
        dd("Recetas: ". $this->getCategoria());
    }

    public function noticias()
    {
        dd("Noticias: ". $this->getCategoria());
    }

    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    public function setCategoria($id)
    {
        $this->getRequest()->session()->put('categoria', $id);
    }

    public function getCategoria()
    {
        return $this->getRequest()->session()->get('categoria');
    }


}
