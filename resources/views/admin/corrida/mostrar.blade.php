@extends('layouts.layout')
@section('post','Corridas')
@section('content')

    <div class="container">

        <!-- <div class="agregarAutobus"> -->
        <div class="agregarCorrida">
            <a class="btn btn-primary" href="{{ url('/Corrida') }}"> Agregar una nueva Corrida </a>
        </div>
        
        <br>
 
    <table class="table table-light">
    <thead class="thead-light">
            <tr>
                <td>Identificador de Corrida </td>
                <td>Origen</td>
                <td>Destino</td>
                <td>Hora de Salida</td>
                <td>Autobus asignado</td>
                <td>Acción</td>
            </tr>
        </thead>    
    <tbody>

        @foreach ($corrida as $x)
            <tr>
                <td>{{ $x->idcorrida}}</td>
                <td>{{ $x->origen}}</td>
                <td>{{ $x->destino}}</td>
                <td>{{ $x->horaSalida}}</td>
                <td>{{ $x->idAutobus}}</td>
           
                <td> 
                        <a class="btn btn-warning" href="../editarChofer/{{ $x->idcorrida}}"> Editar</a>
                        <a class="btn btn-danger" href="../eliminarCorrida/{{ $x->idcorrida}}"> Eliminar </a>       
                </td>
        @endforeach
            </tr>
        </tbody>
    </table>        
        <br>
</div>
@endsection
