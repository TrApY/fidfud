<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
//        dd(auth()->user());
        session()->forget('cabecera');
        session()->forget('ruta');
        return view('home');
    }

    public function show()
    {
//        dd('hola');
        return view('welcome');
    }
}
