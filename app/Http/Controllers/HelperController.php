<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class HelperController extends Controller
{
    public static function controlarCategorias($data)
    {
        if (!Input::get('diabetes')) {
            $data->diabetes = 0;
        }
        if (!Input::get('celiaquia')) {
            $data->celiaquia = 0;
        }
        if (!Input::get('lactosa')) {
            $data->lactosa = 0;
        }
        return $data;
    }
}
