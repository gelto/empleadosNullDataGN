<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- AngularJs -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js" ></script>

  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">Empleados</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Lista <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alta">Alta</a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="container">

      <br>
      <h3>Lista de empleados</h3>
      <br>
      <br>
      
      @foreach($empleados as $empleado)
      <div class="row">
        <div class="col-3 text-left">{{$empleado->nombre}}</div>
        <div class="col-3 text-left">{{$empleado->email}}</div>
        <div class="col-3 text-left">{{$empleado->fechaNacimiento}}</div>
      </div>
      <br>
          @if(count($empleado->Domicilios)>0)
          @foreach($empleado->Domicilios as $domicilio)
          <div class="row">
            <div class="col-3 text-left">{{$domicilio->alias}}</div>
            <div class="col-6 text-left">{{$domicilio->domicilio}}</div>
            <div class="col-3 text-left">@if($domicilio->lat != 0) <a target="_blanck" href="https://www.google.com.mx/maps/@<?php echo $domicilio->lat; ?>,{{$domicilio->lon}},15z">ubicación</a> @else sin ubicación @endif</div>
          </div>
          @endforeach
          @endif
      <br>
      <hr>
      @endforeach

    </div> <!-- /container -->

    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
