@extends('layouts.layout')
@section('post','Choferes')
@section('content')

    <div class="container">

        <div class="agregarAutobus">
            <a class="btn btn-primary" href="{{ url('/Chofer') }}"> Agregar nuevo chofer </a>
        </div>
        
        <br>
 
    <table class="table table-light">
    <thead class="thead-light">
            <tr>
                <td>Licencia </td>
                <td>Nombre</td>
                <td>Primer Apellido</td>
                <td>Segundo Apellido</td>
                <td>Calle</td>
                <td>Colonia</td>
                <td>Número #</td>
                <td>Número telefónico</td>
                <td>Autobus asignado</td>
                <!-- <td colspan="2">Acción</td> -->
                <td>Acción</td>
            </tr>
        </thead>    
    <tbody>

        @foreach ($chofer as $x)
            <tr>
                <td>{{ $x->licencia}}</td>
                <td>{{ $x->nombre}}</td>
                <td>{{ $x->apellido1}}</td>
                <td>{{ $x->apellido2}}</td>
                <td>{{ $x->calle}}</td>
                <td>{{ $x->colonia}}</td>
                <td>{{ $x->dir_numero}}</td>
                <td>{{ $x->numerotelefonico}}</td>
                <td>{{ $x->idAutobus}}</td>
           
                <td> 
                        <a class="btn btn-warning" href="../editarChofer/{{ $x->licencia}}"> Editar</a>
                        <a class="btn btn-danger" href="../bajaChofer/{{ $x->licencia}}"> Eliminar </a> 

                        
                </td>
        @endforeach
            </tr>
        </tbody>
    </table>        
        <br>
</div>
@endsection


