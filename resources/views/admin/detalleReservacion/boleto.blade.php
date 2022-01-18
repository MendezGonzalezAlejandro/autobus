<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h2 style="text-align: center;">Boleto de Pasajero</h2>
    <br>

    <table class="table table-striped table-hover">
    <thead class="thead">
        <tr>
            <th>Número de Compra</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Asiento</th>
            <th>Corrida</th>
        </tr>
    </thead>
        
    <tbody>
        @foreach ($venta as $x)
        <tr>
            <td>{{ $x->idDetalle}}</td>
            <td>{{ $x->nombre}}</td>
            <td>{{ $x->apellido}}</td>
            <td>{{ $x->asiento}}</td>
            <td>{{ $x->idcorrida}}</td>


            @endforeach
        </tr>
        </tbody>

        </table>
</body>
</html>