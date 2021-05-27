@extends('layouts.app')

@section('content')
    @php
        $i = 0;
    @endphp
    @foreach($personajes as $personaje)
        @if(Auth::user()->id == $personaje->user_id)
            @php
                $i = $i + 1;
            @endphp
            
            <div class="container" style="margin: auto; width: 60%;">
                <div class="jumbotron">
                    <h1>Información del personaje de {{Auth::user()->name}}</h1>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Nombre</h3>
                        <h5>{{$personaje->nombre}}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Color del pelaje</h3>
                        <h5>{{$personaje->colorPelaje}}</h5>
                    </div>
                </div> 
                <hr>  
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Clase</h3>        
                        <h5>{{$personaje->clase}}</h5>
                    </div>
                </div>
            </div>                      
            
        @endif
    @endforeach
    @if ($i == '0')
        <div class="form-group col-sm-6" style="margin: auto; width: 60%;">
            <form action="/personaje/seleccionar_color" method="GET" >
                <div class="form-group col-sm-12" >
                    <h1 style="text-align: center;">¡Hola, {{strtok(Auth::user()->name, " ")}}! ¡Crea tu personaje canino!</h1>
                    <h4 style="text-align: center;">Dale a tu personaje un nombre que le haga justicia a su grandeza</h4>
                    <br><br>
                    <label>Nombre del personaje</label>
                    <input type="text" class="form-control" id="nombre_personaje" name="nombre_personaje" required>
                </div>
                <div class="col-sm-12 form-group">
                    <button style="float: right; width: 90px;" type="submit" modified="false" class="btn btn-primary">&#x2192</button>
                </div>        
            </form>
        </div>
    @endif




    
@endsection