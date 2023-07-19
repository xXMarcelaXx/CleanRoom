<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-60-L1-06-T3</title>
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
<form action="/F7-SETCS-ELE-60-L1-06-2T3/{{$registro->id}}"id="loginreg" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Criterio</label>
        <input type="text" name="criterio" id="criterio" class="form-control" tabindex="1" value="{{$registro->criterio}}">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>Turno</label>
        <input type="text" name="turno" id="turno" class="form-control" tabindex="1" value="{{$registro->turno}}" hidden>
    </div>
    <div class="mb-3">
        <label for="" id=txt1  class="form-label" hidden>DocumentoID</label>
        <input type="text" name="documentoid" id="documentoid" class="form-control" tabindex="1" value="{{$registro->documentoid}}" hidden>
    </div>
    <div class="mb-3">
        <label for="" id="txt1" class="form-label">Parte</label>
        <select id="partetabla" name="partetabla" class="form-control" tabindex="1" value="{{$registro->partetabla}}">
            <option value="INICIO">Inicio de turno</option>
            <option value="AJUSTES">Ajuste mantenimiento</option>
            <option value="#1">Set up #1</option>
            <option value="#2">Set up #2</option>
            <option value="#3">Set up #3</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" id=txt1  class="form-label">tipo</label>
        <select id="tipo" name="tipo" class="form-control" tabindex="1" value="{{$registro->tipo}}">
            <option value="{{$registro->tipo}}">{{$registro->tipo}}</option>
            <option value="cumple">Cumple</option>
            <option value="rango">rango</option>
            <option value="texto">texto</option>
        </select>
    </div>
    @if($registro->tipo == 'rango')
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Valor1</label>
        <input type="number" step="0.01" name="valor1" id="valor1" class="form-control" tabindex="1" value="{{$registro->valor1}}">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Valor2</label>
        <input type="number" step="0.01" name="valor2" id="valor2" class="form-control" tabindex="1" value="{{$registro->valor2}}">
    </div>
    @endif
    <div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/F7-SETCS-ELE-60-L1-06-2T3" class="btn btn-danger">Cancelar</a>
    </div>
    </div>
</form>    
</body>
</html>