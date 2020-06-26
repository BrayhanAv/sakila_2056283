<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acordeon</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" />
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>
<body>
 
<div id="accordion">
@foreach ($categorias as $cat)
    
  <h3>{{$cat->name}}</h3>
  <div style="padding: 0">
      <p>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th>Titulo</th>
            <th>Clasificacion</th>
            </tr>
        </thead>
        @foreach ($cat->pelicula as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->rating}}</td>
            <tr>
        @endforeach
    </table>
    </p>
  </div>
@endforeach

</div>
 
 
</body>
</html>