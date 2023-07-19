<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
    <link href="/css/app.css" rel="stylesheet" >
<body id="login">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-light">
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
<form id=loginreg method="POST" action="{{route('updateFecha')}}">
  @csrf
  <p id="txtreg">Cambiar Mes y Año</p>
  <div>
    <label id="txt1" for="ibminput" class="form-label">Año</label>
    <input type="number" name="año"class="form-control" id="añoinput" required autocomplete="disable" placeholder="Escribir Año...">
  </div>
  <div>
    <label id="txt1" for="lastnameinput" class="form-label">Mes</label>
    <input type="text" name="mes" class="form-control" id="mesinput" required autocomplete="disable" placeholder="Escribir Mes...">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="turnos" class="btn btn-danger">Cancelar</a>
</form>  
</body>
</html>