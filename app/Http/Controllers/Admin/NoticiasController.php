<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNoticiasRequest;
use App\Http\Requests\UpdateNoticiasRequest;
use App\Libraries\Repositories\NoticiasRepository;
use App\Models\Noticias;
use Carbon\Carbon;
use File;
use Flash;
//use Mitul\Controller\AppBaseController as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;

class NoticiasController extends Controller
{

    /** @var  NoticiasRepository */
    private $noticiasRepository;

    protected $ruta = 'imagenes/noticias/';

    function __construct(NoticiasRepository $noticiasRepo)
    {
        $this->noticiasRepository = $noticiasRepo;
        session()->put('ruta', $this->ruta);
    }

    /**
     * Display a listing of the Noticias.
     *
     * @return Response
     */
    public function index()
    {
        $noticias = $this->noticiasRepository->searchByCategoria()->paginate(10);

        return view('admin.noticias.index')
            ->with('noticias', $noticias);
    }

    /**
     * Show the form for creating a new Noticias.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.noticias.create');
    }

    /**
     * Store a newly created Noticias in storage.
     *
     * @param CreateNoticiasRequest $request
     *
     * @return Response
     */
    public function store(CreateNoticiasRequest $request)
    {

        $file = $request->file('imagen');

        $noticia = new Noticias($request->all());

        if (!is_null($file)) {

            $nombre = Carbon::now().'_'.$file->getClientOriginalName();

            //TODO comprobar extensión
            Storage::disk('noticias')->put($nombre, File::get($file));

            //TODO Internacionalizar
            $noticia->imagen = $nombre;
        }

        $noticias = $this->noticiasRepository->create($noticia->toArray());
        //		    Flash::success('Noticias saved successfully.');
        flash()->success('La noticia se ha guardado correctamente');

        return redirect(route('admin.noticias.index'));
    }

    /**
     * Display the specified Noticias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $noticias = $this->noticiasRepository->find($id);

        if(empty($noticias))
        {
            Flash::error('Noticias not found');

            return redirect(route('admin.noticias.index'));
        }

        return view('admin.noticias.show')->with('noticias', $noticias);
    }

    /**
     * Show the form for editing the specified Noticias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $noticias = $this->noticiasRepository->find($id);

        if(empty($noticias))
        {
            Flash::error('Noticias not found');

            return redirect(route('admin.noticias.index'));
        }

        return view('admin.noticias.edit')->with('noticias', $noticias);
    }

    /**
     * Update the specified Noticias in storage.
     *
     * @param  int              $id
     * @param UpdateNoticiasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNoticiasRequest $request)
    {
        $noticias = $this->noticiasRepository->find($id);

        if(empty($noticias))
        {
            Flash::error('Noticias not found');

            return redirect(route('admin.noticias.index'));
        }

        $data = new Noticias($request->all());

        $data = HelperController::controlarCategorias($data);

        $file = $request->file('imagen');

        //TODO Refactoriza este método a uno común para todos los controladores
        if (!is_null($file)) {

            if(Storage::disk('noticias')->exists($noticias->imagen)) {
                Storage::disk('noticias')->delete($noticias->imagen);
            }

            $nombre = Carbon::now().'_'.$file->getClientOriginalName();

            Storage::disk('noticias')->put($nombre, File::get($file));

            $data->imagen = $nombre;
        }

        $noticias = $this->noticiasRepository->updateRich($data->toArray(), $id);

        Flash::success('Noticias updated successfully.');

        return redirect(route('admin.noticias.index'));
    }

    /**
     * Remove the specified Noticias from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $noticias = $this->noticiasRepository->find($id);

        $message = "La noticia ha sido borrada correctamente";

        if(empty($noticias))
        {
            $message = "No se ha encontrado la noticia";
//			Flash::error('Noticias not found');
            flash()->error($message);
        }else{

            $this->noticiasRepository->delete($id);

            if(Storage::disk('noticias')->exists($noticias->imagen)) {
                Storage::disk('noticias')->delete($noticias->imagen);
            }
        }

        if ($request->ajax()) {
            return response()->json([
                'message' => $message,
            ]);
        }

        flash()->success($message);

        return redirect(route('admin.noticias.index'));
    }
}
