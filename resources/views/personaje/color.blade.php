@extends('layouts.app')

@section('content')
<div class="form-group col-sm-6" style="margin: auto; width: 60%;">
    <form id="form_botones" action="/personaje/seleccionar_clase" method="GET">
        <div class="form-group col-sm-12">
            <h1 style="text-align: center;">¡Hola, {{strtok(Auth::user()->name, " ")}}! ¡Crea tu personaje canino!</h1>
            <h4 style="text-align: center;">Selecciona el color del pelaje de tu personaje</h4>
            <input type="hidden" id="color_personaje" name="color_personaje">         
            <input type="hidden" class="form-control" id="nombre_personaje" name="nombre_personaje" value={{$nombre_personaje}} required>
        </div>
        <br>
        <div class="col-md-12 form-group" style="margin: auto; width: 100%; text-align: center;">
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_color('Negro')" value="Negro"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_color('Café')" value="Café"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_color('Verde')" value="Verde"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_color('Azul')" value="Azul"> </p>    
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_color('Rojo')" value="Rojo"> </p>
            <p> <input type="button" class="boton_seleccion" onclick="seleccionar_color('Amarillo')" value="Amarillo"> </p>
        </div>
        <div class="col-sm-12 form-group">
            <button style="float: right; width: 90px;" type="submit" id="submit_color" disabled=true modified="false" class="btn btn-primary">&#x2192</button>
        </div>
    </div>

</form>




<style>
.boton_seleccion:target {
    color: blue;
}

</style>

@endsection

@section('scripts')
  <script src={{ asset('js/colores.js') }}></script>
@endsection