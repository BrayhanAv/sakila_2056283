<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" />
    <script>
        $(document).ready(function(){
                console.log("El documento se cargo");
                $("#pais").change(function(){
                    //limpiar el selec de ciudad
                    $("#ciudad").html("");
                    var id_pais = $("#pais").val();
                    //console.log(id_pais);
                    //hacer la peticion a la ruta jscities pasandole el id del pais
                    $.getJSON('JsonCities/' + id_pais , function(resultados){
                        //console.log(resultados);
                        //recorrer el arreglo resultados
                        $.each(resultados, function(indice, objeto_ciudad){
                            //console.log(objeto_ciudad);
                            //agregar la ciudad a el seccion
                            $("#ciudad").append("<option value = '" + objeto_ciudad.city_id + "' >"+ objeto_ciudad.city +"</option>");
                        });
                    } );
                });
            }
        );
    </script>
    <title>Clientes</title>
</head>
<body>
    
  <form class="form-horizontal" method="post" action="{{url('clientes/store')}}">
    @csrf
    <fieldset>
    
    <!-- Form Name -->
    <legend>Nuevo Cliente</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Nombre</label>  
          <div class="col-md-4">
          <input id="textinput" name="nombre_cliente" type="text" placeholder="Nombre del cliente" class="form-control input-md">
            
          </div>
        </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Apellido</label>  
      <div class="col-md-4">
      <input id="textinput" name="apellido_cliente" type="text" placeholder="Apellido del cliente" class="form-control input-md">
        
      </div>
    </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">email</label>  
          <div class="col-md-4">
          <input id="textinput" name="email_cliente" type="text" placeholder="correo del cliente" class="form-control input-md">
            
          </div>
        </div>
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Pais</label>
      <div class="col-md-4">
        <select id="pais" name="Pais_cliente" class="form-control">
          @foreach ($Paises as $item)
            <option value="{{$item->country_id}}">{{$item->country}}</option>
          @endforeach
        </select>
      </div>
    </div>
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Ciudad</label>
      <div class="col-md-4">
        <select id="ciudad" name="ciudad_cliente" class="form-control">
          <option value="">Ciudades</option>
        </select>
      </div>
    </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Dirección: </label>  
          <div class="col-md-4">
          <input id="textinput" name="Dreccion_cliente" type="text" placeholder="Direccion dentro de la ciudad" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Multiple Checkboxes (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="checkboxes">Estado</label>
          <div class="col-md-4">
            <label class="checkbox-inline" for="checkboxes-0">
              <input type="checkbox" name="Estado_cliente" id="checkboxes-0" value="1">
              Activo
            </label>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
          <div class="col-md-4">
            <button type="submit" id="" name="" class="btn btn-primary">Guardar</button>
          </div>
        </div>

    </fieldset>
    </form>
</body>
</html>