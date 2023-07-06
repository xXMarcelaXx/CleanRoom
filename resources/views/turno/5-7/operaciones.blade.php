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
<nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid">
                <img src="/images/R.png" alt="" id="logoborg">
                <div>
                <a href="/turnos" class="btn btn-info" style="color: white">volver</a>                        
                @auth                    
                <a class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
                auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
                @endauth
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
                </div>
            </div>
</nav>
<br><br><br>
<h1 style="text-align: center; color:white; background-color:rgb(113, 113, 255)">TURNO 1</h1>
<br><br>
<div class="contenedor-turnos">
<a href="op00-t57" class="btn" id="boton57">Op. 00</a>
<br><br>
<a href="op20-t57" class="btn" id="boton68">Op. 20</a>
<br><br>
<a href="op40-t57" class="btn" id="boton57">Op. 40</a>  
<br><br>
<a href="op60-t57" class="btn" id="boton68">Op. 60</a>  
<br><br>
<a href="op100-t57" class="btn" id="boton57">Op. 100</a>  
<br><br>
<a href="op103-t57" class="btn" id="boton68">Op. 103</a>  
<br><br>
<a href="op107-t57" class="btn" id="boton57">Op. 107</a>  
<br><br>
<a href="op120-t57" class="btn" id="boton68">Op. 120</a>  
<br><br>
<a href="op140-t57" class="btn" id="boton57">Op. 140</a>  
<br><br>
<a href="op160-t57" class="btn" id="boton68">Op. 160</a>  
<br><br>
<a href="op180-t57" class="btn" id="boton57">Op. 180</a>  
<br><br>
</div>
</body>
</html>