@extends('layouts.layout')
@section('content')
        <div class="container">
                <h1>Editar autobus</h1>
                <form action="{{ url('actU') }}" method="post">
                @csrf
            <input type="hidden" name="id" value"{{ $autobus->idAutobus}} ">
           

            Modelo: <input type:"text" name="modelo" value="{{ $autobus->modelo }}">
            Marca: <input type:"text" name="marca" value="{{ $autobus->marca }}">
            Placa: <input type: "text" name="placa" value="{{ $autobus->placa }}">
            Año: <input type: "text" name="anio" value="{{ $autobus->anio }}">
            <input type="submit" name="actualizar" value="Actualizar">
            </form>

                <br>
        </div>

@endsection