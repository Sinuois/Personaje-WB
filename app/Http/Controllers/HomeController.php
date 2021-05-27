<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personaje;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $personajes = Personaje::all();
        return view ('personaje.index', compact('personajes'));
    }
}
