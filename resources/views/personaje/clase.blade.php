@extends('layouts.app')

@section('content')
<div class="form-group col-sm-6" style="margin: auto; width: 60%;">
    <form id="form_botones" action="/personaje" method="POST" >
        @csrf 

        <div class="form-group col-sm-12">
            <h1 style="text-align: center;">¡Crea tu personaje canino!</h1>
            <h4 style="text-align: center;">Selecciona la clase de tu personaje</h4>
            <input type="hidden" class="form-control" id="clase_personaje" name="clase_personaje" placeholder="Clase" required>
            <input type="hidden" class="form-control" id="nombre_personaje" name="nombre_personaje" value={{$nombre_personaje}} required>
            <input type="hidden" class="form-control" id="color_personaje" name="color_personaje" value={{$color_personaje}} required>
            <input type="hidden" class="form-control" id="user_id" name="user_id" value={{Auth::id()}} required>
        </div>
        <br>
        <div class="col-md-12 form-group" style="margin: auto; width: 100%; text-align: center;">
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_clase('Mago')" value="Mago"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_clase('Hechicero')" value="Hechicero"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_clase('Guerrero')" value="Guerrero"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_clase('Caballero')" value="Caballero"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_clase('Cazador')" value="Cazador"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_clase('Asesino')" value="Asesino"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_clase('Clérigo')" value="Clérigo"> </p>  
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_clase('Curandero')" value="Curandero"> </p>  
        </div>
        <div class="col-sm-12 form-group">
            <button style="float: right; width: 90px;" type="submit" id="submit_clase" disabled=true modified="false"  class="btn btn-primary">&#x2192</button>
        </div>

    </form>
</div>

@endsection

@section('scripts')
<script src={{ asset('js/clases.js') }}></script>
@endsection