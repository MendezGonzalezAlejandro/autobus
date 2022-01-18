
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

                <!--Mostrar mensaje en caso que exista algún error-->
                @if(Session::has('mensaje'))
                        <div class="alert alert-danger" role="alert">
                          {{ Session::get('mensaje') }}
                          </div>
                @endif

                <div class="card-body">
                        <br>
                  <div class="au">
                    <form action="{{ url('AltaP') }}" method="post">
                        @csrf

                      <div class="row">
                        <div class="col-sm-5">
                        <label for="modelo" class="form-label">Modelo*</label>
                        <input type:"text" id="modelo" class="is-required" name="modelo" required autocomplete="modelo">
                        </div>

                        <div class="col-sm-5">
                        <label for="marca" class="form-label">Marca*</label>
                        <input type:"text" id="marca" class="is-required" name="marca" required autocomplete="marca">
                        </div>
                      </div>
                        <br>
                        <br>
                      
                      <div class="row">
                        <div class="col-sm-5">
                          <label for="placa" class="form-label">Placa* </label>
                          <input type:"text" id="placa" class="is-required" name="placa" required autocomplete="placa">
                        </div>

                        <div class="col-sm-5">
                          <label for="anio" class="form-label">Año*</label>
                          <input type:"text" id="anio" class="is-required" name="anio" required autocomplete="año">
                          <br>
                          <br>
                        </div>
                        

                        <div class="formulario" style="text-align: right">
                          <a class="btn btn-secondary" href="{{ url('/Mostrar') }}"> Regresar </a>
                          <button type="submit" class="btn btn-success" name="boton">Registrar</button> 
                         
                        </div>
                    </form>
                  </div>  
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