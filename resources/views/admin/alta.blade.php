@extends('layouts.layout')
@section('content')

        <div class="container">
        <br>
        <h3>Registrar un autobus</h3>
        <br>

        <form action="{{ url('AltaP') }}" method="post">

           @csrf
           
           
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
            <a class="btn btn-secondary" href="{{ url('/Mostrar') }}"> Regresar </a>
            <input type="submit" name="boton" class="btn btn-success" value="Registrar">
            
            <br>  
        </form>
        <br>
        </div>

@endsection