<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRecetasRequest;
use App\Http\Requests\UpdateRecetasRequest;
use App\Libraries\Repositories\RecetasRepository;
use App\Models\Recetas;
use Carbon\Carbon;
use File;
use Flash;
//use Mitul\Controller\AppBaseController as Controller;
use Illuminate\Http\Request;
use Response;
use Storage;

class RecetasController extends Controller
{

	/** @var  RecetasRepository */
	private $recetasRepository;

    protected $ruta = 'imagenes/recetas/';

	function __construct(RecetasRepository $recetasRepo)
	{
		$this->recetasRepository = $recetasRepo;
        session()->put('ruta', $this->ruta);

	}

	/**
	 * Display a listing of the Recetas.
	 *
	 * @return Response
	 */
	public function index()
	{

		$recetas = $this->recetasRepository->searchByCategoria()->paginate(10);

		return view('admin.recetas.index')
			->with('recetas', $recetas);
	}

	/**
	 * Show the form for creating a new Recetas.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.recetas.create');
	}

	/**
	 * Store a newly created Recetas in storage.
	 *
	 * @param CreateRecetasRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateRecetasRequest $request)
	{
        $receta = new Recetas($request->all());

        $file = $request->file('imagen');

        if (!is_null($file)) {
            $nombre = Carbon::now().'_'.$file->getClientOriginalName();

            Storage::disk('recetas')->put($nombre, File::get($file));


            $receta->imagen = $nombre;
        }

		$recetas = $this->recetasRepository->create($receta->toArray());

        //TODO Internacionalizar
//		Flash::success('Recetas saved successfully.');
		flash()->success('La receta se ha guardado correctamente');

		return redirect(route('admin.recetas.index'));
	}

	/**
	 * Display the specified Recetas.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$recetas = $this->recetasRepository->find($id);

		if(empty($recetas))
		{
			Flash::error('Recetas not found');

			return redirect(route('admin.recetas.index'));
		}

		return view('admin.recetas.show')->with('recetas', $recetas);
	}

	/**
	 * Show the form for editing the specified Recetas.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$recetas = $this->recetasRepository->find($id);

		if(empty($recetas))
		{
			Flash::error('Recetas not found');

			return redirect(route('admin.recetas.index'));
		}

		return view('admin.recetas.edit')->with('recetas', $recetas);
	}

	/**
	 * Update the specified Recetas in storage.
	 *
	 * @param  int              $id
	 * @param UpdateRecetasRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateRecetasRequest $request)
	{
		$recetas = $this->recetasRepository->find($id);

		if(empty($recetas))
		{
//			Flash::error('Recetas not found');
			flash()->error('No se ha encontrado la receta');

			return redirect(route('admin.recetas.index'));
		}

		$data = new Recetas($request->all());

		$data = HelperController::controlarCategorias($data);

        $file = $request->file('imagen');

        //TODO Refactoriza este método a uno común para todos los controladores
        if (!is_null($file)) {

            if(Storage::disk('recetas')->exists($recetas->imagen)) {
                Storage::disk('recetas')->delete($recetas->imagen);
            }

            $nombre = Carbon::now().'_'.$file->getClientOriginalName();

            Storage::disk('recetas')->put($nombre, File::get($file));

            $data->imagen = $nombre;
        }

		$recetas = $this->recetasRepository->updateRich($data->toArray(), $id);

//		Flash::success('Recetas updated successfully.');
        flash()->success('La receta ha sido actualizada correctamente');

		return redirect(route('admin.recetas.index'));
	}

	/**
	 * Remove the specified Recetas from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$recetas = $this->recetasRepository->find($id);

        $message = 'La receta ha sido borrada correctamente';

		if(empty($recetas))
		{
            //TODO Falta internalización
            $message = "No se ha encontrado la receta";
//			Flash::error('Recetas not found');
			flash()->error($message);

//			return redirect(route('admin.recetas.index'));
		}else{

            $this->recetasRepository->delete($id);

            if(Storage::disk('recetas')->exists($recetas->imagen)) {
                Storage::disk('recetas')->delete($recetas->imagen);
            }
        }



        if ($request->ajax()) {
            return response()->json([
                'message' => $message,
            ]);
        }

//		Flash::success('Recetas deleted successfully.');
		flash()->success($message);

		return redirect(route('admin.recetas.index'));
	}
}
