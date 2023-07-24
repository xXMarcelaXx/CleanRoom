<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet" >
</head>
<body id="vistas">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-light" style="position: fixed; left: 0; right: 0; top: 0; width: 100%;">
  <div class="container-fluid">
    <img src="/images/R.png" alt="" id="logoborg">
    <div>
                        
    @auth                    
    <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
    auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
    @endauth
    <a href="turnos" class="btn btn-info" style="color: white">Volver</a>
    <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
    </div>
</div>
</nav>



<div class="container" >
    <br><br><br>
    <br>
    <h1 style="text-align: center; color:white; background-color:rgb(29, 29, 29)">Reportes Turno 1</h1>
    <div class="container" id="contenedor-reportes">
    <ul>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
    </ul>        
    </div>
    <br><br>
    <h1 style="text-align: center; color:white; background-color:rgb(29, 29, 29)">Reportes Turno 2</h1>
    <div class="container" id="contenedor-reportes">
    <ul>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
    </ul>        
    </div>
    <br><br>
    <h1 style="text-align: center; color:white; background-color:rgb(29, 29, 29)">Reportes Turno 2</h1>
    <div class="">
        <ul>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
        </ul> 
    </div>

</div>


</body>
</html>