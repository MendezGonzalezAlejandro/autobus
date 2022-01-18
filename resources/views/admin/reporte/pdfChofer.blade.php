<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h2 style="text-align: center;">Reporte de choferes</h2>

    
    <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Licencia </th>
                    <th>Nombre</th>
                    <th>ApellidoP</th>
                    <th>ApellidoM</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Num#</th>
                    <th>Cel</th>
                    <th>Autobús asignado</th>
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
        @endforeach
            </tr>
        </tbody>
    </table>     
    
</body>
</html>