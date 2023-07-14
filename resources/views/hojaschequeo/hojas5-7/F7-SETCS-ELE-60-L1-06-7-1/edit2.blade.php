<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet" >
</head>
<body id="vistas">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="/images/R.png" alt="" id="logoborg">
    <h4 style="padding-right: 200px">Editar encabezado</h4>
    <a href="/logout" class="btn" id="b3">Cerrar sesion</a>
  </div>
</nav>
<form action="{{route('update2SETCS606711',$datoshoja->id)}}" method="POST">
    <div class="table table-responsive">
        <table class="table table-success table-bordered">
            <thead>
                        <tr>
                            <th rowspan="2" colspan="3" style="text-align: end">Titulo</th>
                            <th colspan="4" style="text-align: center"><input type="text" name="titulo" id="titulo" value="{{ $datoshoja->titulo }}"></th>
                            <th rowspan="2" colspan="1" style="text-align: end">DocumentoID</th>
                            <th rowspan="2" colspan="2" ><input type="text" name="documentoid" id="documentoid" value="{{$datoshoja->documentoid}}"></th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center"><input type="text" name="subtitulo" id="subtitulo" value="{{$datoshoja->subtitulo}}"></th>
                        </tr>
                        <tr>
                            <th>No. de cambio</th>
                            <th>Fecha</th>
                            <th>ME/IE</th>
                            <th><input type="text" name="meie" id="meie" value="{{$datoshoja->meie}}"></th>
                            <th>Area</th>
                            <th><input type="text" name="area" id="area" value="{{$datoshoja->area}}"></th>
                            <th>Lugar</th>
                            <th><input type="text" name="lugar" id="lugar" value="{{ $datoshoja->lugar }}"></th>
                            <th>Pagina</th>
                            <th><input type="text" name="pagina" id="pagina" value="{{$datoshoja->pagina}}"></th>
                        </tr>
                        <tr>
                            <th rowspan="2"><input type="text" name="numero_cambio" id="numero_cambio" value="{{ $datoshoja->numero_cambio }}"></th>
                            <th><input type="text" name="fecha" id="fecha" value="{{$datoshoja->fecha}}"></th>
                            <th>calidad</th>
                            <th><input type="text" name="calidad" id="calidad" value="{{$datoshoja->calidad}}"></th>
                            <th>Linea</th>
                            <th><input type="text" name="linea" id="linea" value="{{$datoshoja->linea}}"></th>
                            <th>Planta</th>
                            <th colspan="3"><input type="text" name="planta" id="planta" value="{{$datoshoja->planta}}"></th>
                        </tr>
                        <tr>
                            <th><input type="text" name="revision" id="revision" value="{{$datoshoja->revision}}"></th>
                            <th>Manufactura</th>
                            <th><input type="text" name="manufactura" id="manufactura" value="{{$datoshoja->manufactura}}"></th>
                            <th>Op #</th>
                            <th><input type="text" name="operacion" id="operacion" value="{{$datoshoja->operacion}}"></th>
                            <th>Depto</th>
                            <th><input type="text" name="departamento" id="departamento" value="{{$datoshoja->departamento}}"></th>
                            <th>No.Parte</th>
                            <th><input type="text" name="numeroparte" id="numeroparte" value="{{$datoshoja->numeroparte}}"></th>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: end">Mes:</th>
                            <th colspan="1"><input type="text" name="mes" id="mes" value="{{$datoshoja->mes}}"></th>
                            <th colspan="3" style="text-align: end">Año:</th>
                            <th colspan="3"><input type="text" name="año" id="año" value="{{$datoshoja->año}}"></th>
                        </tr>
            </thead>
        </table>
    </div>
    @csrf
    @method('PUT')
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/F7-SETCS-ELE-60-L1-06-7-1-1" class="btn btn-danger">Cancelar</a>
</form>
</body>
</html>