<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turno 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet" >
</head>
<body id="vistas">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="/images/R.png" alt="" id="logoborg">
    <h4 style="padding-right: 200px">Registro</h4>
    <a href="/logout" class="btn" id="b3">Cerrar sesion</a>
  </div>
</nav>
<form action="/Turno1/{{$turno57->id}}"id="loginreg" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">DocumentoID</label>
        <input type="text" name="documentoid" id="documentoid" class="form-control" tabindex="1" value="{{$turno57->DocumentoID}}">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Titulo</label>
        <input type="text" name="titulo" id="titulo" class="form-control" tabindex="1" value="{{$turno57->Titulo}}">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Operacion</label>
        <input type="text" name="operacion" id="operacion" class="form-control" tabindex="1" value="{{$turno57->Operacion}}">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control" tabindex="1" value="{{$turno57->Descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Ruta</label>
        <input type="text" name="ruta" id="ruta" class="form-control" tabindex="1" value="{{$turno57->Ruta}}">
    </div>
    <div class="mb-3">
        <label for="" id="txt1" class="form-label">#</label>
        <select id="numero" name="numero" class="form-control" tabindex="1" value="{{$turno57->Numero}}">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/Turno1" class="btn btn-danger">Cancelar</a>
    </div>
    </div>
</form>    
</body>
</html>