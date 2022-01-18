@extends('layouts.layout')
@section('content')



<div class="container">
 
        <br>
        <!--<h1 style="text-align: center;">Reportes</h1>
        <br> -->

    <table class="table table-success table-striped ">
        <thead class="thead-light">
            <tr>
                <th colspan="2">Reportes</th> 
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>Autobus

                </td>
                <td> 
                    <div style="text-align: right;">
                        <a class="btn btn-warning" href="{{ url('/Autobus/pdf') }}"> Visualizar reporte </a>
                        |
                        <a class="btn btn-primary" href="{{ url('/Autobus/download') }}"> Descargar reporte </a>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Chofer</td>
                <td> 
                    <div style="text-align: right;">
                        <a class="btn btn-warning" href="{{ url('/Chofer/pdf') }}"> Visualizar reporte </a>
                        |
                        <a class="btn btn-primary" href="{{ url('/Chofer/download') }}"> Descargar reporte </a>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Corrida</td>
                <td> 
                    <div style="text-align: right;">
                        <a class="btn btn-warning" href="{{ url('/Corrida/pdf') }}"> Visualizar reporte </a>
                        |
                        <a class="btn btn-primary" href="{{ url('/Corrida/download') }}"> Descargar reporte </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>     

</div>
<!--
<h2>Reporte de Autobusese</h2>
<a class="btn btn-primary" href="{{ url('/Autobus/pdf') }}"> Visualizar reporte </a>

<a class="btn btn-primary" href="{{ url('/Autobus/download') }}"> Descargar reporte </a>



<h2>Reporte de choferes</h2>
<a class="btn btn-primary" href="{{ url('/Chofer/pdf') }}"> Visualizar reporte </a>
<a class="btn btn-primary" href="{{ url('/Chofer/download') }}"> Descargar reporte </a>

<h2>Reporte de corrida</h2>
<a class="btn btn-primary" href="{{ url('/Corrida/pdf') }}"> Visualizar reporte </a>
<a class="btn btn-primary" href="{{ url('/Corrida/download') }}"> Descargar reporte </a>

-->

<br>
<br>
<br>
<br>
@endsection