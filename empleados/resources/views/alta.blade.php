<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <style>
      .invalido{
          border: 1px solid #f00;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">Empleados</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="/">Lista </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="alta">Alta<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">

      <br>
      <h3>Puedes registrar un nuevo usuario</h3>
      <br>
      <p class="error">&nbsp;</p>
      <br>
      
      <div class="row">
        <div class="col-3 text-right">Nombre</div>
        <div class="col-9"><input type="text" class="nombre" style="display:table-cell; width:50%"></div>
      </div>
      <br>

      <div class="row">
        <div class="col-3 text-right">Email</div>
        <div class="col-9"><input type="text" class="email" style="display:table-cell; width:50%"></div>
      </div>
      <br>

      <div class="row">
        <div class="col-3 text-right">Fecha de nacimiento</div>
        <div class="col-9"><input type="text" class="fecha" placeholder="dd/mm/yyyy" style="display:table-cell; width:50%"></div>
      </div>
      <br>

      <div class="domicilios">
        <div class="domicilioDatos">
          <div class="row">
            <div class="col-3 text-right">Domicilio (alias)</div>
            <div class="col-4"><input type="text" class="alias" placeholder="alias" style="display:table-cell; width:50%"></div>
          </div><br>
          <div class="row">
            <div class="col-3 text-right">Domicilio</div>
            <div class="col-9"><input type="text" class="domicilio" placeholder="dirección" style="display:table-cell; width:50%"></div>
          </div><br>
          <div class="row">
            <div class="col-3 text-right">Latitud</div>
            <div class="col-9"><input type="text" class="lat" style="display:table-cell; width:50%"></div>
          </div><br>
          <div class="row">
            <div class="col-3 text-right">Longitud</div>
            <div class="col-9"><input type="text" class="lon" style="display:table-cell; width:50%"></div>
          </div><br>
          <div class="row">
            <div class="col-11 text-right">Agrergar dirección</div>
            <div class="col-1"><input type="button" class="agregar" value="+"></div>
          </div>
            <br>
            <br>
        </div>
      </div>
        

      
        <!-- fila a clona para agregar domicilio-->
        <div class="domicilioDatos clone" style="display:none;">
          <div class="row">
            <div class="col-3 text-right">Domicilio (alias)</div>
            <div class="col-4"><input type="text" class="alias" placeholder="alias" style="display:table-cell; width:50%"></div>
          </div><br>
          <div class="row">
            <div class="col-3 text-right">Domicilio</div>
            <div class="col-9"><input type="text" class="domicilio" placeholder="dirección" style="display:table-cell; width:50%"></div>
          </div><br>
          <div class="row">
            <div class="col-3 text-right">Latitud</div>
            <div class="col-9"><input type="text" class="lat" style="display:table-cell; width:50%"></div>
          </div><br>
          <div class="row">
            <div class="col-3 text-right">Longitud</div>
            <div class="col-9"><input type="text" class="lon" style="display:table-cell; width:50%"></div>
          </div><br>
          <div class="row">
            <div class="col-11 text-right">Agrergar dirección</div>
            <div class="col-1"><input type="button" class="agregar" value="+"></div>
          </div>
            <br>
            <br>
        </div>
        <!-- fila a clona para agregar domicilio fin-->
        
      </div>

      
      <br>
      
      <div class="row">
        <div class="col-3 text-right">&nbsp;</div>
        <div class="col-9"><input type="button" class="enviar" value="ENVIAR"></div>
      </div>
      <br>

      <input type="hidden" name="_token" value="{{csrf_token()}}" class="csrf">

    </div> <!-- /container -->
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="/js/peticiones.js"></script>
    <script src="/js/validador.js"></script>
    <script src="/js/domicilios.js"></script>
  </body>
</html>
