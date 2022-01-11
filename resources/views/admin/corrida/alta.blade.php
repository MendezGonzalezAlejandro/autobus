
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
                <div class="card-header" style="text-align: center" >{{ __('Registrar una corrida') }}</div>

                <div class="card-body">
                        <br>

                        
                        <form action="{{ url('AltaCorrida') }}" method="post">
                        @csrf

                        <div class="formulario" style="text-align: center">

                        <div class="opciones">
                        <label for="origen" class="form-label">Origen*</label>
                            <select name="origen" id="origen" class="form-select">
                            <option disabled="" selected=""> Seleccione un origen </option>
                            <option value="Salina Cruz, Oaxaca" > Salina Cruz, Oaxaca</option>
                            <option value="Juchitán" > Juchitán </option>
                            <option value="Santa María Huatulco" > Santa María Huatulco </option>
                            </select>
                        </div>


                        <label for="destino" class="form-label">Destino*</label>
                            <select name="destino" id="destino" class="form-select">
                            <option disabled="" selected=""> Seleccione un destino </option>
                            <option value="Salina Cruz, Oaxaca" > Salina Cruz, Oaxaca</option>
                            <option value="Juchitán" > Juchitán </option>
                            <option value="Santa María Huatulco" > Santa María Huatulco </option>
                            </select>
                        </div>

                        <p>Hora de Salida: <input type="time" name="horaSalida"> </p>

                        
                        <div class="opciones">
                        <select name="idAutobus" id="inputAutobus" class="form-select">
                        @foreach ($autobus as $x)
                        <option value="{{ $x['idAutobus'] }}" > {{ $x['idAutobus'] }} </option>
                        @endforeach   
                        </select>
                        </div>

                        
                        <br>
                        <br>
                        </div>
                        

                        <div class="formulario" style="text-align: right">
                        <a class="btn btn-secondary" href="{{ url('/mostrarCorrida') }}"> Regresar </a>
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