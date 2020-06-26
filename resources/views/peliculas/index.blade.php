<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Pelicula</title>
 </head>
<style>

   *{

        padding: 0;
        margin: 0;

   }

   body{
       background-color: rgb(224, 240, 255);
   }

   .contenedor-card{
        width: 100%;
        overflow: hidden;
   }
   

</style>
 <body>

    <div class="contenedor-card">
        <div class="card text-white bg-dark mb-3" style="min-width: 100rem;">
            <div class="card-header">
                <h3>Peliculas</h3>
            </div>
            <div class="card-body">
              <h5 class="card-title">Listado</h5>
              <ul class="list-group list-group-flush text-black">
                    <table class="table-black">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Clasificacion</th>
                                <th>Idioma</th>
                                <th>Categoria</th>
                                <th>Actores</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelicula as $pelI)
                            <tr>
                                <td>{{$pelI->title}}</td>
                                <td>{{$pelI->rating}}</td>
                                <td>{{$pelI->idioma()->first()->name}}</td>
                                <td>
                                    @foreach ($pelI->Categoria()->getresults() as $categorias)
                                    {{$categorias->name}}                          
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($pelI->actores()->getresults() as $actores)
                                    {{$actores->first_name}},                          
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
              </ul>
              <br>
            {{$pelicula->links()}}
            </div>
        </div>
    <div>
 </body>
</html>