@extends('layouts.layout')
@section('content')

        <div class="container">
                <h1>Registrar choferes</h1>
                <form action="{{ url('AltaC') }}" method="post">
                @csrf
                <h3>Datos personales</h3>
           
                Licencia: <input type:"text" name="licencia">
                Nombre: <input type:"text" name="nombre">
                <br>
                <br>
                Primer Apellido: <input type: "text" name="apellido1">
                Segundo Apellido: <input type: "text" name="apellido2">
                <br>
                <br>
                <br>

                <h2>Dirección</h2>

                Calle: <input type: "text" name="calle">
                Colonia: <input type: "text" name="colonia">
                Número: <input type: "text" name="dir_numero">
                <br>
                <br>
                Número Telefónico: <input type: "text" name="numerotelefonico">
                idAutobus: <input type: "text" name="idAutobus">
                <br>
                <br>
                <a class="btn btn-secondary" href="{{ url('/mostrarChofer') }}"> Regresar </a>
                <input type="submit" name="boton" class="btn btn-success" value="Registrar">
                </form>

                <br>
        </div>


@endsection