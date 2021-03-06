<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Detalles de película</title>
  </head>
  <body>

  @extends('layouts.master')

    @section('content')

      <div class="row">
        <div class="col-sm-4">
          <img src="{{$arrayPeliculas['poster']}}" style="height: 200px">
        </div>
        <div class="col-sm-8">
          <h3 style="min-height: 46px; margin: 6px 0 10px 0">
            {{$arrayPeliculas['title']}}
          </h3>
          <p>
            <span style="font-weight: bold;">Año:</span> {{$arrayPeliculas['year']}}
          </p>
          <p>
            <span style="font-weight: bold;">Director:</span> {{$arrayPeliculas['director']}}
          </p>
          <p>
            <span style="font-weight: bold;">Resumen:</span> {{$arrayPeliculas['synopsis']}}
          </p>
          <p>
            <span style="font-weight: bold;">Resumen:</span> {{$arrayPeliculas['synopsis']}}
          </p>
          <p>
            <span style="font-weight: bold;">Estado:</span> 

            @if ($arrayPeliculas['rented'] == true)
              Película actualmente disponible
            @else
              Película actualmente alquilada 

              </br>
              </br>

              <button type="button" class="btn btn-danger">Devolver película</button>
              <a href="/catalog/edit/1" type="button" class="btn btn-warning">Editar película</button>
              <a href="/" type="button" class="btn btn-light" >⮜ Volver al listado</button>
            @endif
          </p>
        </div>
      </div>

    @stop
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>