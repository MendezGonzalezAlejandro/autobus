@extends('layouts.layout')
@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center" >{{ __('Registrar un chofer') }}</div>

                <div class="card-body">                  
                <form action="{{ url('AltaC') }}" method="post">
                
                @csrf
                <h3>Datos personales</h3>
 
                <div class="acomodarL">

                <label for="licencia" class="form-label">Licencia*</label>
                <input type:"text" id="licencia" class="is-required" name="licencia" style="height:35px; width:190px">
                </div>

                <div class="acomodar">
                <label for="nombre" class="form-label">Nombre*</label>
                <input type:"text" id="nombre" class="is-required" name="nombre" style="height:35px; width:190px">
                </div>

                <!--
                Licencia: <input type:"text" name="licencia">
                Nombre: <input type:"text" name="nombre">
-->
                </div>
                
                <div class="tel">
                <label for="apellido1" class="form-label">Primer apellido*</label>
                <input type:"text" id="apellido1" class="is-required" name="apellido1" style="height:35px; width:190px">
                </div>

                <div class="acomodarA">
                <label for="apellido2" class="form-label">Segundo apellido*</label>
                <input type:"text" id="apellido2" class="is-required" name="apellido2" style="height:35px; width:190px">
                </div>
                <!--
                Primer Apellido: <input type: "text" name="apellido1">
                Segundo Apellido: <input type: "text" name="apellido2"> -->

                <br>
                <h3 style=" margin-left: 2%"> Dirección</h3>
                
                <!-- <div style="text-align: center"> -->
                <div class="dir">
                <label for="calle" class="form-label">Calle: *</label>
                <input type:"text" id="calle" class="is-required" name="calle" style="height:35px; width:190px">

                <label for="colonia" class="form-label">Colonia: *</label>
                <input type:"text" id="colonia" class="is-required" name="colonia" style="height:35px; width:190px">

                <label for="dir_numero" class="form-label">Número: *</label>
                <input type:"text" id="dir_numero" class="is-required" name="dir_numero" style="height:35px; width:90px">
                </div>
                <!--
                Calle: <input type: "text" name="calle">
                Colonia: <input type: "text" name="colonia">
                Número: <input type: "text" name="dir_numero">
                -->
                <!-- </div> -->
                

                <div class="tel">
                
                <label for="numerotelefonico" class="form-label">Cel : *</label>
                <input type:"text" id="numerotelefonico" class="is-required" name="numerotelefonico" style="height:35px; width:190px">
                
                 <!--Número Telefónico: <input type: "text" name="numerotelefonico">
                idAutobus: <input type: "text" name="idAutobus"> -->
                </div>

                <div class="textopcion">
                <label for="idAutobus" class="form-label">Autobuses disponibles*</label>
</div>
                <!-- <select name="idAutobus" id="inputAutobus" class="form-select" style="height:35px; width:250px"> -->
                <div class="opciones">
                <select name="idAutobus" id="inputAutobus" class="form-select">
                        @foreach ($autobus as $x)
                        <option value="{{ $x['idAutobus'] }}" > {{ $x['idAutobus'] }} </option>
                        @endforeach   
                </select>
                </div>
                
                        <div class="botonChofer" style="text-align: right">
                        <a class="btn btn-secondary" href="{{ url('/mostrarChofer') }}"> Regresar </a>
                        <input type="submit" name="boton" class="btn btn-success" value="Registrar">
                        </div>
                </form>

                </div>
          </div>
      </div>
      
    </div>
  </div>
</div>
<br>
<br>
<br>

@endsection