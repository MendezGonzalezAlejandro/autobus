<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Corrida</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

        <h2 style="text-align: center;">Reporte de corridas</h2>
        
<table class="table table-light">
    <thead class="thead-light">
            <tr>
                <th>IdCorrida </th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Hora de Salida</th>
                <th>Autobús asignado</th>
                <th>Precio</th>
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
                <td>{{ $x->precio}}</td>

        @endforeach
            </tr>
        </tbody>
    </table> 
    
</body>
</html>