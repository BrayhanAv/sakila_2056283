<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
   <title>Paises</title>
</head>
<body>
    
    <h1 class="text-danger text-center">LISTADO PAISES</h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>
                    PAISES
                </th>

                <th>
                    CAPITAL
                </th>

                <th>
                    MONEDA
                </th>

                <th>
                    POBLACION
                </th>

                <th>
                    CIUDADES
                </th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($paises as $pais => $infopais)
                
                    <tr>
                        <td ROWSPAN="4">
                        {{$pais}}
                        </td>
                        <td ROWSPAN="4">
                        {{$infopais['capital']}}
                        </td>
                        <td ROWSPAN="4">
                        {{$infopais['capital']}}
                        </td>
                        <td ROWSPAN="4">
                        {{$infopais['capital']}}
                        </td>
                    </tr>
                    @foreach ($infopais['principal'] as $infI => $infII)
                        <tr>
                            <td>
                            {{$infII}}
                            </td>
                        </tr>
                    @endforeach
                
                @endforeach

        </tbody>


</body>
</html>
