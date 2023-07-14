<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <style>
.fijar {
  /* Fija los encabezados de la tabla en la parte superior */
  position: sticky;
  left: 0;
  z-index: 1;
}
</style>
</head>

<body id="vistas">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <img src="/images/R.png" alt="" id="logoborg">
            <h3>Registro</h3>
            <div>                    
            @auth                    
            <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
            auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
            @endauth
            <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
            </div>
        </div>
    </nav>
    <form action="/reversoSETCS40214" id="loginreg" style=" height: 70%; overflow:scroll;" method="POST">
        @csrf
        <div class="container">
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Fecha y hora</label>
                <input type="datetime-local" name="fechahora" id="fechahora" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Descripcion de la falla</label>
                <input type="text" name="falla" id="falla" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">¿Se paro el proceso?</label>
                <select name="proceso" id="proceso" class="form-control" tabindex="1">
                    <option value="">--Seleccionar--</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Si es no, explique porque y quien lo
                    autoriza</label>
                <input type="text" name="porque" id="porque" class="form-control" tabindex="1" value="-">
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Muestreo de confirmacion</label>
                <input type="text" name="confirmacion" id="confirmacion" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Disposicion del material
                    construido</label>
                <input type="text" name="dispocision" id="dispocision" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Cantidad</label>
                <input type="text" name="Cantidad" id="Cantidad" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Causa raiz asignable</label>
                <input type="text" name="causa" id="causa" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Accion correctiva</label>
                <input type="text" name="accion" id="accion" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" style="color: white" class="form-label">Responsable (Supv. de
                    produccion)</label>
                <input type="text" name="responsable" id="responsable" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" id=txt1 class="form-label" hidden>DocumentoID</label>
                <input type="text" name="documentoid" id="documentoid" class="form-control" tabindex="1"
                    hidden value="F7-SETCS-ELE-40-L1-02-1-4">
            </div>
            <div class="mb-3">
                <label for="" id=txt1 class="form-label" hidden>Turno</label>
                <input type="text" name="turno" id="turno" class="form-control" tabindex="1" hidden
                    value="1">
            </div>
            <div class="mb-3">
                <label for="" id=txt1 class="form-label" hidden>Mes</label>
                <input type="text" name="mes" id="mes" class="form-control" tabindex="1" hidden value="ABRIL">
            </div>
            <div class="mb-3">
                <label for="" id=txt1 class="form-label" hidden>Año</label>
                <input type="text" name="año" id="año" class="form-control" tabindex="1" hidden value="2023">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="/reversoSETCS40214" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
</body>

</html>
