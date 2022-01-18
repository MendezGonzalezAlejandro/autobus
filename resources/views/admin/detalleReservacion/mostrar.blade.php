@extends('layouts.app')

<title>Los Istmeños</title>

<link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


@section('content')

    <div class="container">

        <br>
        <h1 style="text-align: center;">Horarios disponibles</h1>
        <br>

    <table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Hora de salida</th>
            <th>Precio</th>
            <th>Dia de Salida</th>
            <th>Acción</th>
        </tr>
    </thead>

    <tbody>
        @if(count($reservacion)<1)
        <tr><td colspan="3"><h1 style="text-align: center;">Te invitamos a cambiar los datos del viaje</h1></td></tr>
        @endif
        
        @foreach ($reservacion as $x)
        <tr>
            <td>{{ $x->idcorrida}}</td>
            <td>{{ $x->origen}}</td>
            <td>{{ $x->destino}}</td>
            <td>{{ $x->horaSalida}}</td>
            <td>{{ $x->precio}}</td>
            <td>{{ $dia1 }}</td>
            <td> 
            <!--<a class="btn btn-warning" href="{{ url('/formulario') }}"> Elegir Horario </a> -->
             <a class="btn btn-warning" href="../editarF/{{ $x->idcorrida}}"> Elegir Horario</a>
             <!--<a class="btn btn-warning" href="../editarF/{{ $x->idcorrida}},{{$dia1}}"> Elegir Horario</a> 
             <a class="btn btn-warning" href="../editarF/{{ $x->horaSalida}}"> Elegir Horario</a>   -->
            </td>
            @endforeach
        </tr>
        </tbody>
        </table>
        
        <div>
            <a class="btn btn-primary" href="{{ url('/') }}"> Regresar </a>
        </div>
    </div>

    
@endsection