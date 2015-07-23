<?php namespace App\Http\Requests;

use Illuminate\Routing\Route;

class UpdateRestaurantesRequest extends Request {


	/**
	 * @var Route
	 */
	private $route;

	/**
	 * EditUserRequest constructor.
	 * @param Route $route
	 */
	public function __construct(Route $route)
	{
		$this->route = $route;
	}
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
        return [
          "nombre" => "required|unique:restaurantes,nombre," . $this->route->getParameter('restaurantes')
        ];
	}

}
