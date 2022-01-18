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
    <h2 style="text-align: center;">Reporte de autobuses</h2>
    <br>

    <table class="table table-striped table-hover">
    <thead class="thead">
        <tr>
            <th>idAutobus</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Placa</th>
            <th>Año</th>
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


            @endforeach
        </tr>
        </tbody>

        </table>
</body>
</html>