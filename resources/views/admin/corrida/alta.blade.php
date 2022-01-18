
<!-- <body style="background-color:#1783DB;">  -->
 
@extends('layouts.layout')
@section('content')

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

                        <div class="form-group">
                            <label for="origen" class="form-label">Origen*</label>
                            <select name="origen" id="origen" class="form-select">
                            <option disabled="" selected=""> Seleccione un origen </option>
                            <option value="Salina Cruz, Oaxaca" > Salina Cruz, Oaxaca</option>
                            <option value="Tehuantepec" > Santo Domingo Tehuantepec</option>
                            <option value="Juchitán" > Juchitán </option>
                            <option value="Santa María Huatulco" > Santa María Huatulco </option>
                            </select>
                        </div>

                            <br>
                        <label for="destino" class="form-label">Destino*</label>
                            <select name="destino" id="destino" class="form-select">
                            <option disabled="" selected=""> Seleccione un destino </option>
                            <option value="Salina Cruz, Oaxaca" > Salina Cruz, Oaxaca</option>
                            <option value="Tehuantepec" > Santo Domingo Tehuantepec</option>
                            <option value="Juchitán" > Juchitán </option>
                            <option value="Santa María Huatulco" > Santa María Huatulco </option>
                        </select>
                        
                        <br>
                        

                        
                        <!-- <div class="opciones"> -->
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="idAutobus" class="form-label">Autobus disponible: </label> 
                            <select name="idAutobus" id="inputAutobus" class="form-select">
                            @foreach ($autobus as $x)
                            <option value="{{ $x['idAutobus'] }}" > {{ $x['idAutobus'] }} </option>
                            @endforeach   
                            </select>
                        </div>

                        <div class="col-sm-3">                  
                        <label for="horaSalida" class="form-label">Hora de Salida: </label>  
                        <input type="time" name="horaSalida"> 
                        </div>

                        <div class="col-sm-3">
                            <div class="prec">  
                                <label for="precio">Precio(10-100):</label>
                                <input type="number" id="precio" name="precio"
                                min="10" max="100" value="25">
                            </div>
                        </div>



                    </div>
   
                        <br>
                        <br>
                        <div style="text-align: right">
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
</div>
<br>
<br>
<br>

@endsection