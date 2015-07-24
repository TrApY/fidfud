<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateRestaurantesRequest;
use App\Http\Requests\UpdateRestaurantesRequest;
use App\Libraries\Repositories\RestaurantesRepository;
use App\Models\Restaurantes;
use Carbon\Carbon;
use File;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Input;
use Response;

//use Mitul\Controller\AppBaseController as Controller;

class RestaurantesController extends Controller
{

	/** @var  RestaurantesRepository */
	private $restaurantesRepository;

	protected $ruta = 'imagenes/restaurantes/';

	function __construct(RestaurantesRepository $restaurantesRepo)
	{
		$this->restaurantesRepository = $restaurantesRepo;
		session()->put('ruta', $this->ruta);
	}

	/**
	 * Display a listing of the Restaurantes.
	 *
	 * @return Response
	 */
	public function index()
	{
        $restaurantes = $this->restaurantesRepository->searchByCategoria()->paginate(10);

		return view('restaurantes.index')
			->with('restaurantes', $restaurantes);
	}

	/**
	 * Show the form for creating a new Restaurantes.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('restaurantes.create');
	}

	/**
	 * Store a newly created Restaurantes in storage.
	 *
	 * @param CreateRestaurantesRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateRestaurantesRequest $request)
	{
		$file = $request->file('imagen');

		$restaurante = new Restaurantes($request->all());

		if (!is_null($file)) {

			$nombre = Carbon::now().'_'.$file->getClientOriginalName();

			//TODO comprobar extensión
			Storage::disk('restaurantes')->put($nombre, File::get($file));

			//TODO Internacionalizar
			$restaurante->imagen = $nombre;
		}

		$restaurantes = $this->restaurantesRepository->create($restaurante->toArray());

		Flash::success('Restaurantes saved successfully.');

		return redirect(route('restaurantes.index'));
	}

	/**
	 * Display the specified Restaurantes.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$restaurantes = $this->restaurantesRepository->find($id);
//        dd($restaurantes);
		if(empty($restaurantes))
		{
			Flash::error('Restaurantes not found');

			return redirect(route('restaurantes.index'));
		}

		return view('restaurantes.show')->with('restaurantes', $restaurantes);
	}

	/**
	 * Show the form for editing the specified Restaurantes.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$restaurantes = $this->restaurantesRepository->find($id);

		if(empty($restaurantes))
		{
			Flash::error('Restaurantes not found');

			return redirect(route('restaurantes.index'));
		}

		return view('restaurantes.edit')->with('restaurantes', $restaurantes);
	}

	/**
	 * Update the specified Restaurantes in storage.
	 *
	 * @param  int              $id
	 * @param UpdateRestaurantesRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateRestaurantesRequest $request)
	{
		$restaurantes = $this->restaurantesRepository->find($id);

		if(empty($restaurantes))
		{
//			Flash::error('Restaurantes not found');
			Flash::error('Restaurante no encontrado');

			return redirect(route('restaurantes.index'));
		}

		$data = new Restaurantes($request->all());

		$data = HelperController::controlarCategorias($data);

		$file = $request->file('imagen');

		if (!is_null($file)) {

			if(Storage::disk('restaurantes')->exists($restaurantes->imagen)) {
				Storage::disk('restaurantes')->delete($restaurantes->imagen);
			}

			$nombre = Carbon::now().'_'.$file->getClientOriginalName();

			//TODO comprobar extensión
			Storage::disk('restaurantes')->put($nombre, File::get($file));

			//TODO Internacionalizar
			$data->imagen = $nombre;
		}

		$restaurantes = $this->restaurantesRepository->updateRich($data->toArray(), $id);

//		Flash::success('Restaurantes updated successfully.');
		flash()->success('Restaurante actualizado correctamente.');

		return redirect(route('restaurantes.index'));
	}

	/**
	 * Remove the specified Restaurantes from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$restaurantes = $this->restaurantesRepository->find($id);

		$message = "El restaurante ". $restaurantes->name." fue eliminado correctamente";

		if(empty($restaurantes))
		{
			flash()->error('No se ha encontrado el restaurante');

			$message = "No se ha encontrado el restaurante";
//			return redirect(route('restaurantes.index'));
		}else{
			$this->restaurantesRepository->delete($id);

			if(Storage::disk('restaurantes')->exists($restaurantes->imagen)) {
				Storage::disk('restaurantes')->delete($restaurantes->imagen);
			}
		}



		if ($request->ajax()) {

			return response()->json([
				'message' => $message,
			]);
		}

		flash()->succes($message);

		return redirect()->route('restaurantes.index');
//		return redirect(route('restaurantes.index'));
	}
}
