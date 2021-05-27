<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personaje;

class PersonajesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(){
        $this->validate(request(),[ #Validaciones para los atributos
        'nombre_personaje' => 'required', 
        'color_personaje' => 'required',
        'clase_personaje' => 'required',
        'user_id' => 'required'
        ]);
        try
        {
          $personaje = new Personaje;
  
          $personaje->nombre = request('nombre_personaje');
          $personaje->colorPelaje = request('color_personaje');
          $personaje->clase = request('clase_personaje');
          $personaje->user_id = request('user_id');
  
          $personaje->save();
        }
        catch(\Exception $e)
        {
          return back()->withErrors(['Personaje duplicado']); #Se obtienen los errores provenientes de la DB para ser mostrados como un error dentro de la vista.
        }
        return redirect('/personaje');
    } 

    public function index() {
        $personajes = Personaje::all();
        return view ('personaje.index', compact('personajes'));
    }

    public function seleccionar_color (Request $request){
        $nombre_personaje = $request->nombre_personaje; 
        return view('personaje.color', compact('nombre_personaje'));
    }

    public function seleccionar_clase (Request $request){
        $nombre_personaje = $request->nombre_personaje; 
        $color_personaje =  $request->color_personaje;  
        return view('personaje.clase', compact('nombre_personaje', 'color_personaje'));
    }    
}
