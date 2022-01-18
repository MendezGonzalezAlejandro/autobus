@extends('layouts.layout')
@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center" >{{ __('Registrar un chofer') }}</div>

                <!--Mostrar mensaje en caso que exista algún error-->
                @if(Session::has('mensaje'))
                        <div class="alert alert-danger" role="alert">
                          {{ Session::get('mensaje') }}
                          </div>
                @endif

                <div class="card-body">
                  
                
                <form action="{{ url('AltaC') }}" method="post">
                @csrf
                <div class="row">
                <h3>Datos personales</h3>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-2">
                    <label for="licencia" class="form-label">Licencia*</label>
                    </div>
                  <div class="col-sm-4">
                    <input type:"text" id="licencia" class="is-required" name="licencia" style="height:35px; width:190px">
                  </div>
    
                  <div class="col-sm-3">
                    <label for="nombre" class="form-label">Nombre*</label>
                  </div>
                  <div class="col-sm-3">
                    <input type:"text" id="nombre" class="is-required" name="nombre" style="height:35px; width:190px">
                  </div>
                </div>

                <br>   
                <div class="row">
                  <div class="col-sm-2">
                    <label for="apellido1" class="form-label">Primer apellido*</label>
                  </div>

                  <div class="col-sm-4">
                    <input type:"text" id="apellido1" class="is-required" name="apellido1" style="height:35px; width:190px">
                  </div>

                  <div class="col-sm-3">
                    <label for="apellido2" class="form-label">Segundo apellido*</label>
                  </div>
                  <div class="col-sm-3">
                    <input type:"text" id="apellido2" class="is-required" name="apellido2" style="height:35px; width:190px">
                  </div>
                </div>
                <!--
                Primer Apellido: <input type: "text" name="apellido1">
                Segundo Apellido: <input type: "text" name="apellido2"> -->

                <br>
                <div class="row">
                <h3> Dirección</h3>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-1">
                    <label for="calle" class="form-label">Calle*:</label>
                  </div>
                
                  <div class="col-sm-3">  
                    <input type:"text" id="calle" class="is-required" name="calle" style="height:35px; width:190px">
                  </div>

                  <div class="col-sm-1">
                    <label for="colonia" class="form-label">Colonia*:</label>
                  </div>
                  <div class="col-sm-3"> 
                    <input type:"text" id="colonia" class="is-required" name="colonia" style="height:35px; width:190px">
                  </div>

                  <div class="col-sm-1">
                    <label for="dir_numero" class="form-label">Número*:</label>
                  </div>

                  <div class="col-sm-3"> 
                    <input type:"text" id="dir_numero" class="is-required" name="dir_numero" style="height:35px; width:90px">
                  </div>
                </div>

                <br>
              <div class="row">
                  <div class="col-sm-1">
                    <label for="numerotelefonico" class="form-label">Cel : *</label>
                  </div>

                  <div class="col-sm-3"> 
                    <input type:"text" id="numerotelefonico" class="is-required" name="numerotelefonico" style="height:35px; width:190px">
                  </div>

                <div class="col-sm-3"> 
                  <label for="idAutobus" class="form-label">Autobuses disponibles*</label>
                </div>

                <!-- <select name="idAutobus" id="inputAutobus" class="form-select" style="height:35px; width:250px"> -->
                <div class="col-sm-3">
                  <div class="altaChofer">
                    <select name="idAutobus" id="inputAutobus" class="form-select">
                        @foreach ($autobus as $x)
                        <option value="{{ $x['idAutobus'] }}" > {{ $x['idAutobus'] }} </option>
                        @endforeach   
                    </select>
                  </div>
                </div>
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