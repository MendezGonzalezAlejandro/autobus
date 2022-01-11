
<!-- <body style="background-color:#1783DB;">  -->
 
@extends('layouts.layout')
@section('content')


<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header" style="text-align: center" >{{ __('Registrar un autobus') }}</div>

                <div class="card-body">
                        <br>

                        
                        <form action="{{ url('AltaP') }}" method="post">
                        @csrf

                        <div class="formulario" style="text-align: center">
                        <label for="modelo" class="form-label">Modelo*</label>
                        <input type:"text" id="modelo" class="is-required" name="modelo" style="height:35px; width:250px">

                        <label for="marca" class="form-label">Marca*</label>
                        <input type:"text" id="marca" class="is-required" name="marca" style="height:35px; width:250px">
                        <br>
                        <br>
                        <label for="placa" class="form-label">Placa : * </label>
                        <input type:"text" id="placa" class="is-required" name="placa" style="height:35px; width:250px">

                        <label for="anio" class="form-label">Año : *</label>
                        <input type:"text" id="anio" class="is-required" name="anio" style="height:35px; width:250px">
                        <br>
                        <br>
                        </div>
                        

                        <div class="formulario" style="text-align: right">
                        <a class="btn btn-secondary" href="{{ url('/Mostrar') }}"> Regresar </a>
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