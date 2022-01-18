
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
                <div class="card-header" style="text-align: center" >{{ __('Editar un autobus') }}</div>

                <!--Mostrar mensaje en caso que exista algún error-->
                @if(Session::has('mensaje'))
                        <div class="alert alert-danger" role="alert">
                          {{ Session::get('mensaje') }}
                          </div>
                @endif

                <div class="card-body">
                        <br>
                        <form action="{{ url('modificarAutobus') }}" method="post">
                        @csrf
                        
                        <input type="hidden" name="idAutobus" value="{{ $autobus->idAutobus }}">

                        <div class="formulario" style="text-align: center">
                        <label for="modelo" class="form-label">Modelo*</label>
                        <input type:"text" id="modelo" class="is-required" name="modelo" style="height:35px; width:250px" value="{{ $autobus->modelo }}">

                        <label for="marca" class="form-label">Marca*</label>
                        <input type:"text" id="marca" class="is-required" name="marca" style="height:35px; width:250px" value="{{ $autobus->marca }}">
                        <br>
                        <br>
                        <label for="placa" class="form-label">Placa : * </label>
                        <input type:"text" id="placa" class="is-required" name="placa" style="height:35px; width:250px" value="{{ $autobus->placa }}">

                        <label for="anio" class="form-label">Año : *</label>
                        <input type:"text" id="anio" class="is-required" name="anio" style="height:35px; width:250px" value="{{ $autobus->anio }}">
                        <br>
                        <br>
                        </div>
                        

                        <div class="formulario" style="text-align: right">
                        <a class="btn btn-secondary" href="{{ url('/Mostrar') }}"> Regresar </a>
                        <input type="submit" name="boton" class="btn btn-success" value="Actualizar">
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
