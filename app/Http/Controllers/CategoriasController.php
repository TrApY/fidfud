<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use App\Libraries\Repositories\CategoriasRepository;
use Flash;
//use Mitul\Controller\AppBaseController as Controller;
use Response;

class CategoriasController extends Controller
{

	/** @var  CategoriasRepository */
	private $categoriasRepository;

	function __construct(CategoriasRepository $categoriasRepo)
	{
		$this->categoriasRepository = $categoriasRepo;
	}

	/**
	 * Display a listing of the Categorias.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorias = $this->categoriasRepository->paginate(10);



		return view('categorias.index')
			->with('categorias', $categorias);
	}

	/**
	 * Show the form for creating a new Categorias.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('categorias.create');
	}

	/**
	 * Store a newly created Categorias in storage.
	 *
	 * @param CreateCategoriasRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCategoriasRequest $request)
	{
		$input = $request->all();

		$categorias = $this->categoriasRepository->create($input);

		Flash::success('Categorias saved successfully.');

		return redirect(route('categorias.index'));
	}

	/**
	 * Display the specified Categorias.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{

//		dd('hola');

		$categorias = $this->categoriasRepository->findBy('nombre', $id);

		if(empty($categorias))
		{
			Flash::error('Categorias not found');

			return view('layout.show');
		}

		session()->put('categoria', $categorias->id);
		session()->put('cabecera', $categorias->nombre);


//		return view('categorias.show')->with('categorias', $categorias);
		return view('categorias');
	}

	/**
	 * Show the form for editing the specified Categorias.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$categorias = $this->categoriasRepository->find($id);

		if(empty($categorias))
		{
			Flash::error('Categorias not found');

			return redirect(route('categorias.index'));
		}

		return view('categorias.edit')->with('categorias', $categorias);
	}

	/**
	 * Update the specified Categorias in storage.
	 *
	 * @param  int              $id
	 * @param UpdateCategoriasRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateCategoriasRequest $request)
	{
		$categorias = $this->categoriasRepository->find($id);

		if(empty($categorias))
		{
			Flash::error('Categorias not found');

			return redirect(route('categorias.index'));
		}

		$categorias = $this->categoriasRepository->updateRich($request->all(), $id);

		Flash::success('Categorias updated successfully.');

		return redirect(route('categorias.index'));
	}

	/**
	 * Remove the specified Categorias from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		dd($id);

		$categorias = $this->categoriasRepository->find($id);

		if(empty($categorias))
		{
			Flash::error('Categorias not found');

			return redirect(route('categorias.index'));
		}

		$this->categoriasRepository->delete($id);

		Flash::success('Categorias deleted successfully.');

		return redirect(route('categorias.index'));
	}
}
