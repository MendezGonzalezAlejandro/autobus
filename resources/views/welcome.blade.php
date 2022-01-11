<!-- <body background="{{asset('imagen/fondo.jpg')}}">  -->
@extends('layouts.app')

<title>Los Istmeños</title>

<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="cardWelcome">
        

            <form action="{{ url(' ') }}" method="post">

            <div class="welc">

   
            <label for="origen" class="form-label">Origen: </label>
    
            <select name="origen" id="origen" class="form-select"  style="height:35px; width:190px">
                        <option disabled="" selected=""> Seleccione un origen </option>
                        <option value="Salina Cruz" > Salina Cruz Oaxaca </option>
            </select>

     
            <label for="destino" class="form-label">Destino: </label>
    
            <select name="destino" id="destino" class="form-select"  style="height:35px; width:190px">
                        <option value="Salina Cruz" > Juchitan </option>
            </select>

     

            <!-- style="height:35px; width:190px" -->
           
            <label for="fecha" class="form-label">Fecha: </label>
           
           
            <input type="date" id="fecha "name="fecha" >

            
            <input type="submit" name="boton" class="btn btn-primary" value="Buscar viaje">

            <!--
            fechas: <input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
            

                Origen: <input type:"text" name="origen">
                Destino: <input type:"text" name="destino">
                Fecha: <input type:"text" name="fecha">
                Hora: <input type:"text" name="hora">
        -->
            </div>
            <br>
        </form>
        
      </div>
    </div>
  </div>
</div>

    @endsection
