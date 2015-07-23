<?php namespace App\Libraries\Repositories;

use App\Http\Controllers\HelperController;
use App\Models\Recetas;
use Bosnadev\Repositories\Eloquent\Repository;
use Schema;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RecetasRepository extends Repository
{

    /**
    * Configure the Model
    *
    **/
    public function model()
    {
      return 'App\Models\Recetas';
    }

    public function searchByCategoria()
    {
        $categoria = HelperController::getColumn();

        $query = Recetas::where($categoria, '=', 1);

        return $query;
    }

	public function search($input)
    {
        $query = Recetas::query();

        $columns = Schema::getColumnListing('recetas');
        $attributes = array();

        foreach($columns as $attribute)
        {
            if(isset($input[$attribute]) and !empty($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] = $input[$attribute];
            }
            else
            {
                $attributes[$attribute] =  null;
            }
        }

        return [$query->get(), $attributes];
    }

    public function apiFindOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "Recetas not found");
        }

        return $model;
    }

    public function apiDeleteOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "Recetas not found");
        }

        return $model->delete();
    }
}
