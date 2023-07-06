<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-100-L1-01-T3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet" >
</head>
<body id="vistas">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
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
<form action="/F7-SETCS-ELE-100-L1-01-3T3"id="loginreg" style=" height: 70%; overflow:scroll;" method="POST">
    @csrf
    <div class="container">
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Criterio</label>
        <input type="text" name="criterio" id="criterio" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d1</label>
        <input type="text" name="d1" id="d1" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d2</label>
        <input type="text" name="d2" id="d2" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d3</label>
        <input type="text" name="d3" id="d3" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d4</label>
        <input type="text" name="d4" id="d4" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d5</label>
        <input type="text" name="d5" id="d5" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d6</label>
        <input type="text" name="d6" id="d6" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d7</label>
        <input type="text" name="d7" id="d7" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d8</label>
        <input type="text" name="d8" id="d8" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d9</label>
        <input type="text" name="d9" id="d9" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d10</label>
        <input type="text" name="d10" id="d10" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d11</label>
        <input type="text" name="d11" id="d11" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d12</label>
        <input type="text" name="d12" id="d12" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d13</label>
        <input type="text" name="d13" id="d13" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d14</label>
        <input type="text" name="d14" id="d14" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d15</label>
        <input type="text" name="d15" id="d15" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d16</label>
        <input type="text" name="d16" id="d16" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d17</label>
        <input type="text" name="d17" id="d17" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d18</label>
        <input type="text" name="d18" id="d18" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d19</label>
        <input type="text" name="d19" id="d19" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d20</label>
        <input type="text" name="d20" id="d20" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d21</label>
        <input type="text" name="d21" id="d21" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d22</label>
        <input type="text" name="d22" id="d22" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d23</label>
        <input type="text" name="d23" id="d23" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d24</label>
        <input type="text" name="d24" id="d24" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d25</label>
        <input type="text" name="d25" id="d25" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d26</label>
        <input type="text" name="d26" id="d26" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d27</label>
        <input type="text" name="d27" id="d27" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d28</label>
        <input type="text" name="d28" id="d28" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d29</label>
        <input type="text" name="d29" id="d29" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d30</label>
        <input type="text" name="d30" id="d30" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>d31</label>
        <input type="text" name="d31" id="d31" class="form-control" tabindex="1" hidden value="-">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>Turno</label>
        <input type="text" name="turno" id="turno" class="form-control" tabindex="1" hidden value="3">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label" hidden>DocumentoID</label>
        <input type="text" name="documentoid" id="documentoid" class="form-control" tabindex="1" hidden value="F7-SETCS-ELE-100-L1-01-1-3">
    </div>
    <div class="mb-3">
        <label for="" id="txt1" class="form-label">Parte</label>
        <select id="partetabla" name="partetabla" class="form-control" tabindex="1">
            <option value="ARRIBA">INICIO DE TURNO</option>
            <option value="ABAJO">MANTENIMIENTO/CAMBIO DE MODELO</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" id="txt1" class="form-label">Tipo</label>
        <select id="tipo" name="tipo" class="form-control" tabindex="1">
            <option value="cumple">Cumple - No Cumple</option>
            <option value="texto">TEXTO</option>
            <option value="rango">RANGOS</option>
        </select>        
    </div>
    <p style="color: white">Si Seleccionas "RANGOS" ingresa los valores del rango correspondientes, si no, solo
    ignoralos</p>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Valor1</label>
        <input type="number" step="0.01" name="valor1" id="valor1" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" id=txt1 class="form-label">Valor2</label>
        <input type="number" step="0.01" name="valor2" id="valor2" class="form-control" tabindex="1">
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
        <a href="/F7-SETCS-ELE-100-L1-01-3T3" class="btn btn-danger">Cancelar</a>
    </div>
    </div>
</form>    
</body>
</html>