@extends('layouts.layout')
@section('content')

<div class="container">
  
        <div class="agregarAutobus">
            <a class="btn btn-primary" href="{{ url('/Alta') }}"> Agregar nuevo autobus </a>
        </div>

        <br>
 
    <table class="table table-light">
    <thead class="thead-light">
        <tr>
            <td>idAutobus</td>
            <td>Modelo</td>
            <td>Marca</td>
            <td>Placa</td>
            <td>Año</td>
            <!--   <td colspan="2">Acción</td> -->
            <td>Acción</td>
        </tr>
    </thead>
        
    <tbody>
        @foreach ($autobus as $x)
        <tr>
            <td>{{ $x->idAutobus}}</td>
            <td>{{ $x->modelo}}</td>
            <td>{{ $x->marca}}</td>
            <td>{{ $x->placa}}</td>
            <td>{{ $x->anio}}</td>

            <td> 
            <a class="btn btn-warning" href="../editarU/{{ $x->idAutobus}}"> Editar</a>
            <a class="btn btn-danger" href="../baja/{{ $x->idAutobus}}"> Eliminar </a>
            </td>

            @endforeach
        </tr>
        </tbody>

        </table>
        
        <br>
</div>
        <!--Hipervinculo a home
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        -->
@endsection